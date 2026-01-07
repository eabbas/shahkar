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
use Illuminate\Support\Facades\Storage;
use DB;

class HomeController extends Controller
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
    public function index()
    {
        $courses = course::all();
        $products = product::where('is_in_home', 1)->get();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $banners = banners::where('sectionName', 'banners')->get();
        $bigBanner = banners::where('sectionName', 'bigBanner')->first();
        $tileBanners = banners::where('sectionName', 'tileBanners')->get();
        $specialDiscounts = category::where('title', 'تخفیفات ویژه')->with('products')->first();
        $specialDiscounts = $this->getProductMedias($specialDiscounts['products']);
        $bigTile = bigTile::first();
        $footerTile = footerTile::first();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
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
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
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
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
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
        $logo = logo::first();
        return view('admin.app.dashboard', [
            'logo' => $logo,
        ]);
    }
    public function relatedProducts(Request $request)
    {
        if ($request['id'] == 'all') {
            $products = product::where('is_in_home', 1)->with('price')->get();
        }
        if ($request['id'] != 'all') {
            $products = product::where('category_id', $request['id'])->where('is_in_home', 1)->with('price')->get();
        }
        $products = $this->getProductMedias($products);
        return response()->json($products);
    }
}
