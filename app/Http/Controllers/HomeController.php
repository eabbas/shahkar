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
use App\Models\header;
use App\Models\introduction;
use App\Models\section;
use App\Models\service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class HomeController extends Controller
{
    // public function getProductMedias($products)
    // {
    //     foreach ($products as $product) {
    //         $product->load(['media' => function ($query) {
    //             $query->select('product_id', DB::raw("IFNULL(media_path , 'images/noImage.png') media_path"))->where('is_main', 1);
    //         }]);
    //         foreach ($product->media as $media) {
    //             $product['img'] = asset('storage/images/noImage.png');
    //             if (Storage::disk('public')->exists($media['media_path'])) {
    //                 $product['img'] = asset('storage/' . $media['media_path']);
    //             }
    //         }
    //     }
    //     return $products;
    // }
    public function index()
    {
        // $courses = course::all();
        // $products = product::where('show_in_home', 1)->get();
        // $products = $this->getProductMedias($products);
        // $settings = settings::all();
        // $cats = category::all();
        // $banners = banners::where('sectionName', 'banners')->get();
        // $bigBanner = banners::where('sectionName', 'bigBanner')->first();
        // $tileBanners = banners::where('sectionName', 'tileBanners')->get();
        // $specialDiscounts = category::where('title', 'تخفیفات ویژه')->with('products')->first();
        // $specialDiscounts = $this->getProductMedias($specialDiscounts['products'] ?? []);
        // $bigTile = bigTile::first();
        // $footerTile = footerTile::first();
        // $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        // $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $header = header::first();
        $logo = logo::first();
        $services = service::all();
        $introduction = introduction::first();
        $categories = category::all();
        $products = product::where('show_in_home', 1)->get();
        foreach ($products as $product) {
            if ($product->media->isNotEmpty()) {
                foreach ($product->media as $media) {
                    if ($media['is_main']) {
                        $product['mainImg']  = $media['media_path'];
                        break;
                    } else {
                        $product['mainImg'] = 'default.png';
                    }
                }
            } else {
                $product['mainImg'] = 'default.png';
            }
        }
        return view('mahdi.index', [
            'logo' => $logo,
            'header' => $header,
            'services' => $services,
            'introduction' => $introduction,
            'categories' => $categories,
            'products' => $products,
        ]);
    }
    public function notAccess()
    {
        $courses = course::all();
        $products = product::where('show_in_home', 1)->get();
        // $products = $this->getProductMedias($products);
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
        $products = product::where('show_in_home', 1)->get();
        // $products = $this->getProductMedias($products);
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
            $products = product::where('show_in_home', 1)->with('price')->get();
        }
        if ($request['id'] != 'all') {
            $products = product::where('category_id', $request['id'])->where('show_in_home', 1)->with('price')->get();
        }
        // $products = $this->getProductMedias($products);
        return response()->json($products);
    }
    public function pageNotFound()
    {
        $courses = course::all();
        $products = product::where('show_in_home', 1)->get();
        // $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        return view('404', [
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
}
