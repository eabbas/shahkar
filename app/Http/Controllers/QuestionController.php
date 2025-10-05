<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {~
        question::create([
            'text' => $request->question_text,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'active' => $request->active
        ]);
        return to_route('question-index');
    }
    public function index()
    {
        $x = User::all();
        return $x;
        // $products = product::with('category')->get();
        // return view('product.index', ['products' => $products]);
    }
    // public function show(product $product)
    // {
    //     $settings = settings::all();
    //     $product->category;
    //     return view('product.show', ['product' => $product, 'settings'=>$settings]);
    // }
    // public function edit(product $product)
    // {
    //     $product->category;
    //     $categories = category::all();
    //     return view('product.edit', ['product' => $product, 'categories' => $categories]);
    // }
    // public function update(Request $request)
    // {
    //     $product = product::find($request->product_id);
    //     $product->title = $request->title;
    //     $product->description = $request->description;
    //     $product->image = $request->image;
    //     $product->summary = $request->summary;
    //     $product->category_id = $request->category_id;
    //     $product->save();
    //     return to_route('product-index');
    // }
    // public function delete(product $product)
    // {
    //     $product->delete();
    //     return to_route('product-index');
    // }
}
