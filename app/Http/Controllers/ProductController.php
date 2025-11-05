<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\category;
use App\Models\product;
use App\Models\question;
use App\Models\settings;
use App\Models\media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        $settings = settings::all();
        $categories = category::all();
        return view('product.create', ["categories" => $categories, 'settings'=>$settings]);
    }
    public function store(Request $request)
    {
        
        dd($request->all());
        $type = request()->mainImage->getClientOriginalExtension();
        $originalName = request()->mainImage->getClientOriginalname();
        $fullName = Str::uuid()."_".$originalName;
        $mainPath = request()->file('mainImage')->storeAs('images', $fullName, 'public');
        
        
        $product_id = product::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
            'is_in_home'=>$request->is_in_home,
            'brand'=>$request->brand
        ]);
        $products []= ['product_id'=>$product_id, 'path'=>$mainPath, 'type'=>$type, 'is_main'=>1, 'created_at' => now(), 'updated_at' => now()];

        foreach($request->gallery as $gallery){
            $type = $gallery->getClientOriginalExtension();
            $originalGalleryName = $gallery->getClientOriginalname();
            $fullNameGallery = Str::uuid()."_".$originalGalleryName;
            $galleryPath = $gallery->storeAs('images', $fullNameGallery, 'public');
            $products[]=['product_id'=>$product_id, 'path'=>$galleryPath, 'type'=>$type, 'is_main'=>0, 'created_at' => now(), 'updated_at' => now()];
        }
        
        media::insert($products);

        return to_route('product-index');
    }
    public function index()
    {
        $products = product::with('category')->get();
        return view('product.index', ['products' => $products]);
    }
    public function show(product $product)
    {
        // dd($product::with('medias')->get());
        $answers = answer::all();
        $settings = settings::all();
        $product->category;
        $product->comments;
        $questions = question::all();
        $product->medias;
        // return $answers;
        return view('product.show', ['product' => $product, 'settings' => $settings, 'questions' => $questions, 'answers' => $answers]);

    }
    public function edit(product $product)
    {
        $settings = settings::all();
        $product->category;
        $product->medias;
        $categories = category::all();
        return view('product.edit', ['product' => $product, 'categories' => $categories, 'settings'=>$settings]);
    }
    public function update(Request $request)
    {
        dd($request->all());
        $medias = media::where('product_id', $request->product_id)->get();
        dd($medias);
        // foreach($product->medias as $media){
        //     Storage::disk('public')->delete($media->path);
        // }
        // $product = product::find($request->product_id);
        // $product->title = $request->title;
        // $product->description = $request->description;
        // $product->summary = $request->summary;
        // $product->category_id = $request->category_id;
        // $product->save();
        // return to_route('product-index');
    }
    public function delete(product $product)
    {
        dd($product->comments);
        foreach($product->medias as $media){
            Storage::disk('public')->delete($media->path);
        }
        $product->delete();
        return to_route('product-index');
    }
}
