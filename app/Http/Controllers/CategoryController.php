<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = category::select('id', 'title')->get();
        return view('admin.category.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        if ($request['image']) {
            $originalName = request()->image->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . $originalName, 'public');
            category::create([
                'title' => $request->title,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'image' => "storage/" . $path
            ]);
            return to_route('category-adminIndex');
        }
        category::create([
            'title' => $request->title,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'image' => null
        ]);
        return to_route('category-adminIndex');
    }
    public function adminIndex()
    {
        $cats = category::all();
        return view('admin.category.index', ['categories' => $cats]);
    }
    public function index()
    {
        $cats = category::all();
        return view('user.category.index', ['categories' => $cats]);
    }
    public function adminShow(category $category)
    {
        return view('admin.category.show', ['category' => $category]);
    }
    public function show(category $category)
    {
        return view('user.category.show', ['category' => $category]);
    }
    public function edit(category $category)
    {
        $cats = category::all();
        return view('admin.category.edit', ['cat' => $category, 'categories' => $cats]);
    }
    public function update(Request $request)
    {
        $category = category::find($request->category_id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        if ($request['image']) {
            $originalName = request()->image->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . $originalName, 'public');
            $category->image = "storage/" .  $path;
        }
        if (!$request['image']) {
            $category->image = null;
        }
        $category->save();
        return to_route('category-adminIndex');
    }
    public function delete(category $category)
    {
        $category->delete();
        return to_route('category-adminIndex');
    }
}
