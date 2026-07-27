<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\category_product;
use App\Models\logo;
use App\Models\product;
use App\Models\product_attributes;
use App\Models\product_media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Log;

class ProductController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        $cats = category::all();
        return view('admin.product.create', ['logo' => $logo, 'categories' => $cats]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => ['required'],
                'primary_price' => ['required'],
                'category_ids' => ['required'],
            ],
            [
                'title.required' => 'پر کردن این فیلد الزامی است.',
                'primary_price.required' => 'پر کردن این فیلد الزامی است.',
                'category_ids.required' => 'پر کردن این فیلد الزامی است.',
            ]
        );
        $product = product::create([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'primary_price' => $request->primary_price,
            'secondary_price' => $request->secondary_price,
            'count' => $request->count,
            'show_in_home' => $request->show_in_home ?? 0,
        ]);
        if (isset($request['category_ids'])) {
            foreach ($request['category_ids'] as $cat_id) {
                category_product::create([
                    'product_id' => $product['id'],
                    'category_id' => $cat_id
                ]);
            }
        }
        if (isset($request['attributes'])) {
            foreach ($request['attributes']['attribute_key'] as $index => $key) {
                product_attributes::create([
                    'product_id' => $product['id'],
                    'attribute_key' => $key,
                    'attribute_value' => $request['attributes']['attribute_value'][$index]
                ]);
            }
        }
        if (isset($request['mainImage'])) {
            $img_type = $request->mainImage->getClientOriginalExtension();
            $img_path = $request->mainImage->store('productImgs', 'public');
            product_media::create([
                'product_id' => $product['id'],
                'media_type' => $img_type,
                'media_path' => $img_path,
                'is_main' => 1
            ]);
        }
        if (isset($request['gallery'])) {
            foreach ($request['gallery'] as $file) {
                $img_type = $file->getClientOriginalExtension();
                $img_path = $file->store('productImgs', 'public');
                product_media::create([
                    'product_id' => $product['id'],
                    'media_type' => $img_type,
                    'media_path' => $img_path,
                    'is_main' => 0
                ]);
            }
        }
        return to_route('product.create')->with('message', ' محصول ' . $product['title'] . ' ایجاد شد ');
    }
    public function adminIndex()
    {
        $logo = logo::first();
        $products = product::with('media')->with('categories')->get();
        foreach ($products as $product) {
            if ($product->media->isNotEmpty()) {
                foreach ($product->media as $media) {
                    if ($media['is_main']) {
                        $product['mainImg']  = $media['media_path'];
                        break;
                    } else {
                        $product['mainImg'] = 'default.png';
                    }
                }
            } else {
                $product['mainImg'] = 'default.png';
            }
        }
        return view('admin.product.index', ['products' => $products, 'logo' => $logo]);
    }
    public function edit(Request $request)
    {
        $catIds = product::find($request['id'])->categories->pluck('id');
        $product = product::find($request['id'])->load('media')->load('attributes')->load('categories');
        $categories = category::select(['id', 'title'])->get();
        return response()->json(['product' => $product, 'cats' => $categories, 'catIds' => $catIds]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => ['required'],
                'primary_price' => ['required'],
                'category_ids' => ['required'],
            ],
            [
                'title.required' => 'پر کردن فیلد عنوان الزامی است.',
                'primary_price.required' => 'پر کردن فیلد قیمت اصلی الزامی است.',
                'category_ids.required' => 'حداقل یک دسته بندی برای محصول انتخاب کنید.',
            ]
        );
        $product = product::find($request['product_id']);
        $title = $product->title;
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->summary = $request['summary'];
        $product->primary_price = $request['primary_price'];
        $product->secondary_price = $request['secondary_price'];
        $product->count = $request['count'];
        $product->show_in_home = $request['show_in_home'] ?? 0;
        category_product::where('product_id', $product['id'])->delete();
        foreach ($request['category_ids'] as $catId) {
            category_product::create([
                'product_id' => $product['id'],
                'category_id' => $catId,
            ]);
        }
        if (isset($request['removedAttrs'])) {
            foreach ($request['removedAttrs'] as $attrId) {
                product_attributes::find($attrId)->delete();
            }
        }
        if (isset($request['removedImgs'])) {
            if (isset($request['removedImgs']['mainImg'])) {
                Storage::disk('public')->delete($request['removedImgs']['mainImg']);
                product_media::where('media_path', $request['removedImgs']['mainImg'])->delete();
            }
            if (isset($request['removedImgs']['gallery'])) {
                foreach ($request['removedImgs']['gallery'] as $media) {
                    Storage::disk('public')->delete($media);
                    product_media::where('media_path', $media)->delete();
                }
            }
        }
        if (isset($request['mainImage'])) {
            foreach ($product->media as $media) {
                if ($media['is_main']) {
                    Storage::disk('public')->delete($media['media_path']);
                    product_media::where('media_path', $media['media_path'])->delete();
                }
            }
            $newImgType = $request->mainImage->getClientOriginalExtension();
            $newImgPath = $request->mainImage->store('productImgs', 'public');
            product_media::create([
                'product_id' => $product['id'],
                'media_type' => $newImgType,
                'media_path' => $newImgPath,
                'is_main' => 1
            ]);
        }
        if (isset($request['gallery'])) {
            foreach ($request['gallery'] as $file) {
                $newImgType = $file->getClientOriginalExtension();
                $newImgPath = $file->store('productImgs', 'public');
                product_media::create([
                    'product_id' => $product['id'],
                    'media_type' => $newImgType,
                    'media_path' => $newImgPath,
                    'is_main' => 0
                ]);
            }
        }
        if (isset($request['attributes'])) {
            if (isset($request['attributes']['oldAttrs'])) {
                foreach ($request['attributes']['oldAttrs']['attribute_key'] as $id => $key) {
                    $oldProAtt = product_attributes::find($id);
                    $oldProAtt->attribute_key = $key;
                    $oldProAtt->attribute_value = $request['attributes']['oldAttrs']['attribute_value'][$id];
                    $oldProAtt->save();
                }
            }
            if (isset($request['attributes']['newAttrs'])) {
                foreach ($request['attributes']['newAttrs']['attribute_key'] as $index => $key) {
                    product_attributes::create([
                        'product_id' => $product['id'],
                        'attribute_key' => $key,
                        'attribute_value' => $request['attributes']['newAttrs']['attribute_value'][$index]
                    ]);
                }
            }
        }
        $product->save();
        return to_route('product.adminIndex')->with('message', ' محصول ' . $title . ' به روز رسانی شد. ');
    }
    public function delete($id)
    {
        $product = product::find($id);
        foreach ($product->media as $media) {
            Storage::disk('public')->delete($media['media_path']);
        }
        $product->media()->delete();
        $product->attributes()->delete();
        $product->categories()->detach();
        $product->delete();
        return to_route('product.adminIndex')->with('message', ' محصول ' . $product['title'] . ' حذف شد. ');
    }
    public function show(Product $product)
    {
        return view('admin.product.show', ['product' => $product]);
    }
}
