<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\category;
use App\Models\product;
use App\Models\question;
use App\Models\settings;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories = category::all();
        return view('product.create', ["categories" => $categories]);
    }
    public function store(Request $request)
    {
        product::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
        ]);
        return to_route('product-index');
    }
    public function index()
    {
        $products = product::with('category')->get();
        return view('product.index', ['products' => $products]);
    }
    public function show(product $product)
    {
        $answers = answer::all();
        $settings = settings::all();
        $product->category;
        $questions = question::all();
        // return $answers;
        return view('product.show', ['product' => $product, 'settings' => $settings, 'questions' => $questions, 'answers' => $answers]);
    }
    public function edit(product $product)
    {
        $product->category;
        $categories = category::all();
        return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }
    public function update(Request $request)
    {
        $product = product::find($request->product_id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->summary = $request->summary;
        $product->category_id = $request->category_id;
        $product->save();
        return to_route('product-index');
    }
    public function delete(product $product)
    {
        $product->delete();
        return to_route('product-index');
    }
}
