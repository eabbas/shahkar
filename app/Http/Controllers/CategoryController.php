<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\course;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;

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
                'image' => 'storage/' . $path
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
        $courses = course::all();
        $products = product::all();
        $settings = settings::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        $cats = category::all();
        return view('user.category.index', [
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminShow(category $category)
    {
        return view('admin.category.show', ['category' => $category]);
    }

    public function show(category $category)
    {
        $courses = course::all();
        $products = product::all();
        $cats = category::all();
        $settings = settings::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('user.category.show', [
            'courses' => $courses,
            'products' => $products,
            'categories' => $cats,
            'settings' => $settings,
            'category' => $category,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
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
            $category->image = 'storage/' . $path;
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
