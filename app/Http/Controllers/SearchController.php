<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $courses = course::all();
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        if ($request->category == 'all') {
            $category = null;
            $products = product::where('title', $request->searchedValue)->get();
        }
        if ($request->category != 'all') {
            $category = category::find($request->category);
            $products = product::where('category_id', $request->category)->where('title', $request->searchedValue)->get();
        }
        return view('search', [
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'category' => $category,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }
    public function index(category $category)
    {
        $courses = course::all();
        $products = product::all();
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        return view('relatedProductsToCategory', [
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'category' => $category,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }
}
