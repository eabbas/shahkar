<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\category;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\media;
use App\Models\product;
use App\Models\product_attributes;
use App\Models\product_price;
use App\Models\question;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        $settings = settings::all();
        $categories = category::all();
        return view('admin.product.create', ['categories' => $categories, 'settings' => $settings]);
    }

    public function store(Request $request)
    {
        // dd($request->all(), $request->proAttr[0]['value']);
        $type = request()->mainImage->getClientOriginalExtension();
        $originalName = request()->mainImage->getClientOriginalname();
        $fullName = Str::uuid() . '_' . $originalName;
        $mainPath = request()->file('mainImage')->storeAs('images', $fullName, 'public');

        $product_id = product::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
            'is_in_home' => $request->is_in_home,
            'brand' => $request->brand
        ]);
        $products[] = ['product_id' => $product_id, 'path' => $mainPath, 'type' => $type, 'is_main' => 1, 'created_at' => now(), 'updated_at' => now()];

        foreach ($request->gallery as $gallery) {
            $typeG = $gallery->getClientOriginalExtension();
            $originalGalleryName = $gallery->getClientOriginalname();
            $fullNameGallery = Str::uuid() . '_' . $originalGalleryName;
            $galleryPath = $gallery->storeAs('images', $fullNameGallery, 'public');
            $products[] = ['product_id' => $product_id, 'path' => $galleryPath, 'type' => $typeG, 'is_main' => 0, 'created_at' => now(), 'updated_at' => now()];
        }
        media::insert($products);
        $product_attribute_id = [];
        foreach ($request->proAttr as $attribute) {
            $product_attribute_id[] = product_attributes::insertGetId([
                'product_id' => $product_id,
                'attribute_key' => $attribute['key'],
                'attribute_value' => $attribute['value']
            ]);
        }

        product_price::create([
            'product_id' => $product_id,
            'product_attribute' => json_encode($product_attribute_id),
            'price' => $request->price,
            'discount' => $request->discount,
            'quantity' => $request->quantity
        ]);

        return to_route('product-adminIndex');
    }

    public function index()
    {
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        $products = product::with('category')->get();
        return view('user.product.index', [
            'products' => $products,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminIndex()
    {
        $products = product::with('category')->get();
        return view('admin.product.index', ['products' => $products]);
    }

    public function show(product $product)
    {
        $campare = $product->price->price - $product->price->discount;
        $x = $campare / $product->price->price;
        $persent = $x * 100;
        $answers = answer::all();
        $settings = settings::all();
        $product->category;
        $product->comments;
        $questions = question::all();
        $product->medias;
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('user.product.show', [
            'product' => $product,
            'settings' => $settings,
            'questions' => $questions,
            'answers' => $answers,
            'persent' => $persent,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminShow(product $product)
    {
        $campare = $product->price->price - $product->price->discount;
        $x = $campare / $product->price->price;
        $persent = $x * 100;
        $answers = answer::all();
        $settings = settings::all();
        $product->category;
        $product->comments;
        $questions = question::all();
        $product->medias;
        return view('admin.product.show', ['product' => $product, 'settings' => $settings, 'questions' => $questions, 'answers' => $answers, 'persent' => $persent]);
    }

    public function edit(product $product)
    {
        $settings = settings::all();
        $product->category;
        $product->medias;
        $categories = category::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories, 'settings' => $settings]);
    }

    public function update(Request $request)
    {
        $product = product::find($request->id);
        if ($request->mainImage) {
            foreach ($product->medias as $mainImage) {
                if ($mainImage->is_main == 1) {
                    Storage::disk('public')->delete($mainImage->path);
                    $media = media::where(['product_id' => $product->id, 'is_main' => 1])->first();
                    $media->delete();
                }
            }
            $type = request()->mainImage->getClientOriginalExtension();
            $originalName = request()->mainImage->getClientOriginalname();
            $fullName = Str::uuid() . '_' . $originalName;
            $mainPath = request()->file('mainImage')->storeAs('images', $fullName, 'public');
            media::create([
                'product_id' => $product->id,
                'path' => $mainPath,
                'type' => $type,
                'is_main' => 1
            ]);
        }
        if ($request->gallery) {
            foreach ($product->medias as $galleryPath) {
                if ($galleryPath->is_main == 0) {
                    Storage::disk('public')->delete($galleryPath->path);
                    $mediaG = media::where(['product_id' => $product->id, 'is_main' => 0])->get();
                    foreach ($mediaG as $img) {
                        $img->delete();
                    }
                }
            }
            foreach ($request->gallery as $gallery) {
                $typeG = $gallery->getClientOriginalExtension();
                $originalNameG = $gallery->getClientOriginalname();
                $fullNameG = Str::uuid() . '_' . $originalNameG;
                $galleryPath = $gallery->storeAs('images', $fullNameG, 'public');
                media::create([
                    'product_id' => $product->id,
                    'path' => $galleryPath,
                    'type' => $typeG,
                    'is_main' => 0
                ]);
            }
        }
        if ($request->proAttr) {
            $productAttributes = product_attributes::where('product_id', $product->id)->get();
            foreach ($productAttributes as $productAttribute) {
                $productAttribute->delete();
            }
            $product_attribute_id = [];
            foreach ($request->proAttr as $attribute) {
                $product_attribute_id[] = product_attributes::insertGetId([
                    'product_id' => $product->id,
                    'attribute_key' => $attribute['key'],
                    'attribute_value' => $attribute['value']
                ]);
            }
        }
        if ($request->price) {
            $product->price->delete();
            product_price::create([
                'product_id' => $product->id,
                'product_attribute' => json_encode($product_attribute_id),
                'price' => $request->price,
                'discount' => $request->discount,
                'quantity' => $request->quantity
            ]);
        }
        $product->title = $request->title;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        if ($request->is_in_home) {
            $product->is_in_home = $request->is_in_home;
        }
        $product->save();

        return to_route('product-adminIndex');
    }

    public function delete(product $product)
    {
        foreach ($product->medias as $media) {
            Storage::disk('public')->delete($media->path);
            $media->delete();
        }
        // foreach ($product->attributes as $attribute) {
        //     $attribute->delete();
        // }
        $product->price()->delete();
        $product->attributes()->delete();
        $product->delete();
        return to_route('product-adminIndex');
    }
}
