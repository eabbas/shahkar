<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class SearchController extends Controller
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
    public function search(Request $request)
    {
        $courses = course::all();
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        if ($request->category == 'all') {
            $category = null;
            $products = product::where('title', $request->searchedValue)->get();
        }
        if ($request->category != 'all') {
            $category = category::find($request->category);
            $products = product::where('category_id', $request->category)->where('title', $request->searchedValue)->get();
        }
        $products = $this->getProductMedias($products);
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
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
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
