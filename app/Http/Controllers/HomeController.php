<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\logo;
use App\Models\product;
use App\Models\header;
use App\Models\introduction;
use App\Models\service;

class HomeController extends Controller
{
    public function index()
    {
        $header = header::first();
        $logo = logo::first();
        $services = service::all();
        $introduction = introduction::first();
        $categories = category::with('products')->has('products')->get();
        $products = product::where('show_in_home', 1)->get();
        foreach ($products as $product) {
            if ($product->media->isNotEmpty()) {
                foreach ($product->media as $media) {
                    if ($media['is_main']) {
                        $product['mainImg']  = $media['media_path'];
                        break;
                    } else {
                        $product['mainImg'] = 'default.jpg';
                    }
                }
            } else {
                $product['mainImg'] = 'default.jpg';
            }
        }
        return view('index', [
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
        $services = service::all();
        $categories = category::with('products')->has('products')->get();
        $logo = logo::first();
        return view('notAccess', [
            'logo' => $logo,
            'services' => $services,
            'categories' => $categories,
        ]);
    }
    public function loginAtFirst()
    {
        $services = service::all();
        $categories = category::with('products')->has('products')->get();
        $logo = logo::first();
        return view('loginAtFirst', [
            'logo' => $logo,
            'services' => $services,
            'categories' => $categories,
        ]);
    }
    public function dashboard()
    {
        $logo = logo::first();
        return view('admin.app.dashboard', [
            'logo' => $logo,
        ]);
    }
    public function pageNotFound()
    {
        $services = service::all();
        $categories = category::with('products')->has('products')->get();
        $logo = logo::first();
        return view('404', [
            'logo' => $logo,
            'services' => $services,
            'categories' => $categories,
        ]);
    }
}
