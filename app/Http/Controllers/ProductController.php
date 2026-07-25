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
        return view('admin.product.index', ['products' => $products, 'logo' => $logo]);
    }
    public function show(Product $product)
    {
        return view('commingSoon');
        return $product;
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
}
