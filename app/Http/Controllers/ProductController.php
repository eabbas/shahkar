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
use App\Models\course;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class ProductController extends Controller
{
    public function getProductMedias($products)
    {
        foreach ($products as $product) {
            $product->load(['medias' => function ($query) {
                $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
            }]);
            foreach ($product->medias as $media) {
                $product['img'] = asset('storage/images/noImage.png');
                if (Storage::disk('public')->exists($media['path'])) {
                    $product['img'] = asset('storage/' . $media['path']);
                }
            }
        }
        return $products;
    }
    public function create()
    {
        $settings = settings::all();
        $categories = category::all();
        $logo = logo::first();
        return view('admin.product.create', [
            'categories' => $categories,
            'settings' => $settings,
            'logo' => $logo
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $mainPath = null;
        $type = null;
        if (isset($request['mainImage'])) {
            $type = request()->mainImage->getClientOriginalExtension();
            $originalName = request()->mainImage->getClientOriginalName();
            $fullName = Str::uuid() . '_' . $originalName;
            $mainPath = request()->file('mainImage')->storeAs('images', $fullName, 'public');
        }
        $product_id = product::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
            'is_in_home' => $request->is_in_home ?? 0,
            'brand' => $request->brand
        ]);
        $products[] = ['product_id' => $product_id, 'path' => $mainPath, 'type' => $type, 'is_main' => 1, 'created_at' => now(), 'updated_at' => now()];

        if (isset($request['gallery'])) {
            foreach ($request->gallery as $gallery) {
                $typeG = $gallery->getClientOriginalExtension();
                $originalGalleryName = $gallery->getClientOriginalName();
                $fullNameGallery = Str::uuid() . '_' . $originalGalleryName;
                $galleryPath = $gallery->storeAs('images', $fullNameGallery, 'public');
                $products[] = ['product_id' => $product_id, 'path' => $galleryPath, 'type' => $typeG, 'is_main' => 0, 'created_at' => now(), 'updated_at' => now()];
            }
        }
        media::insert($products);
        $product_attribute_id = [];
        if (isset($request['proAttr'])) {
            foreach ($request->proAttr as $key => $value) {
                foreach ($value as $attribute) {
                    if ($attribute) {
                        $product_attribute_id[] = product_attributes::insertGetId([
                            'product_id' => $product_id,
                            'attribute_key' => $key,
                            'attribute_value' => $attribute
                        ]);
                    }
                }
            }
        }

        product_price::create([
            'product_id' => $product_id,
            'product_attribute' => json_encode($product_attribute_id),
            'price' => $request->price,
            'discount' => $request->discount,
            'quantity' => $request->quantity
        ]);

        return to_route('product-adminIndex');
        // return redirect()->back();
    }

    public function index()
    {
        $courses = course::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $products = product::with('category')->get();
        $products = $this->getProductMedias($products);
        return view('user.product.index', [
            'courses' => $courses,
            'settings' => $settings,
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
        $products = $this->getProductMedias($products);
        $logo = logo::first();
        return view('admin.product.index', [
            'products' => $products,
            'logo' => $logo
        ]);
    }

    public function show(product $product)
    {
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $campare = $product->price->price - $product->price->discount;
        $x = $campare / $product->price->price;
        $persent = $x * 100;
        $answers = answer::all();
        $settings = settings::all();
        $product->category;
        $product->comments;
        $product->medias;
        $questions = question::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        return view('user.product.show', [
            'courses' => $courses,
            'settings' => $settings,
            'products' => $products,
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
        $logo = logo::first();
        return view('admin.product.show', ['product' => $product, 'settings' => $settings, 'questions' => $questions, 'answers' => $answers, 'persent' => $persent, 'logo' => $logo]);
    }

    public function edit(product $product)
    {
        $logo = logo::first();
        $settings = settings::all();
        $product->category;
        $product->medias;
        $product->price;
        $categories = category::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories, 'settings' => $settings, 'logo' => $logo]);
    }

    public function update(Request $request)
    {
        $product = product::find($request->id);
        if (isset($request['medias'])) {
            foreach ($product->medias as $media) {
                Storage::disk('public')->delete($media->path);
                $media->delete();
            }
        }
        $product->price()->delete();
        $product->attributes()->delete();
        $product->comments()->delete();
        $product->delete();
        $this->store($request);
        return to_route('product-adminIndex');
    }

    public function delete(product $product)
    {
        // return $product;
        if (isset($request['medias'])) {
            foreach ($product->medias as $media) {
                Storage::disk('public')->delete($media->path);
                $media->delete();
            }
        }
        $product->price()->delete();
        $product->attributes()->delete();
        $product->comments()->delete();
        $product->delete();
        return to_route('product-adminIndex');
    }

    public function deleteAll(Request $request)
    {
        // dd($request->all());
        if (!isset($request->products)) {
            return redirect()->back();
        }
        foreach ($request->products as $product_id) {
            $product = product::find($product_id);
            if (isset($request['medias'])) {
                foreach ($product->medias as $media) {
                    Storage::disk('public')->delete($media->path);
                    $media->delete();
                }
            }
            $product->price()->delete();
            $product->attributes()->delete();
            $product->comments()->delete();
            $product->delete();
        }
        return redirect()->back();
    }
}
