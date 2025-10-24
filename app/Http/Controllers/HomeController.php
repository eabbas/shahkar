<?php

namespace App\Http\Controllers;

use App\Models\banners;
use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\category;
use App\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        $products = product::all();
        $settings = settings::all();
        $cats = category::all();
        $banners = banners::where('sectionName', 'banners')->get();
        $bigBanner = banners::where('sectionName', 'bigBanner')->get();
        $specialDiscounts = category::where('title', 'تخفیفات ویژه')->with('products')->get();
        return view('home', ['settings' => $settings, 'products' => $products, 'categories' => $cats, 'banners' => $banners, 'specialDiscounts' => $specialDiscounts, 'bigBanner' => $bigBanner]);
    }
}
