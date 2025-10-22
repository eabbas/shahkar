<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = category::select('id', 'title')->get();
        return view('category.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $originalName = request()->image->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', time() . $originalName, 'public');
        category::create([
            'title' => $request->title,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'image' => "storage/" . $path
        ]);
        return to_route('category-index');
    }
    public function index()
    {
        $cats = category::all();
        // $cats = category::where('parent_id', 0)->with('children')->get();
        return view('category.index', ['categories' => $cats]);
    }
    public function show(category $category)
    {
        return view('category.show', ['category' => $category]);
    }
    public function edit(category $category)
    {
        $cats = category::all();
        return view('category.edit', ['cat' => $category, 'categories' => $cats]);
    }
    public function update(Request $request)
    {
        $originalName = request()->image->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', time() . $originalName, 'public');
        $category = category::find($request->category_id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->image = "storage/" .  $path;
        $category->save();
        return to_route('category-index');
    }
    public function delete(category $category)
    {
        $category->delete();
        return to_route('category-index');
    }
    public function products(category $category)
    {
        $category->products;
        return $category;
        return view('category.products', ['category', $category]);
    }
}
