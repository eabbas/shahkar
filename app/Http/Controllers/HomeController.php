<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\bigTile;
use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\category;
use App\Models\footer_column;
use App\Models\footerTile;
use App\Models\logo;
use App\Models\menu;
use App\Models\product;
use App\Models\course;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $courses = course::all();
        $products = product::where('is_in_home', 1)->get();
        $settings = settings::all();
        $cats = category::all();
        $banners = banners::where('sectionName', 'banners')->get();
        $bigBanner = banners::where('sectionName', 'bigBanner')->get();
        $tileBanners = banners::where('sectionName', 'tileBanners')->get();
        $specialDiscounts = category::where('title', 'تخفیفات ویژه')->with('products')->get();
        $bigTile = bigTile::all();
        $footerTile = footerTile::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('home', [
            'courses' => $courses,
            'settings' => $settings,
            'products' => $products,
            'categories' => $cats,
            'banners' => $banners,
            'specialDiscounts' => $specialDiscounts,
            'bigBanner' => $bigBanner,
            'tileBanners' => $tileBanners,
            'bigTile' => $bigTile,
            'footerTile' => $footerTile,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }
    public function notAccess()
    {
        $courses = course::all();
        $products = product::where('is_in_home', 1)->get();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('notAccess', [
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
    public function loginAtFirst()
    {
        $courses = course::all();
        $products = product::where('is_in_home', 1)->get();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('loginAtFirst', [
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
    public function dashboard()
    {
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('admin.app.dashboard', [
            'settings' => $settings,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }
    public function relatedProducts(Request $request)
    {
        if ($request['id'] == 'all') {
            $products = product::where('is_in_home', 1)->get();
        }
        if ($request['id'] != 'all') {
            $products = product::where('category_id', $request['id'])->where('is_in_home', 1)->get();
        }
        return response()->json($products);
    }
}
