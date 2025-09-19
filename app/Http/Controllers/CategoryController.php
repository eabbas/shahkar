<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        category::create($request->all());
        return to_route('category-index');
    }
    public function index()
    {
        $cats = category::all();
        return view('category.index', ['categories' => $cats]);
    }
    public function show(category $category)
    {
        return view('category.show', ['category' => $category]);
    }
    public function edit(category $category)
    {
        return view('category.edit', ['category' => $category]);
    }
    public function update(Request $request)
    {
        $category = category::find($request->category_id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return to_route('category-index');
    }
    public function delete(category $category)
    {
        $category->delete();
        return to_route('category-index');
    }
}
