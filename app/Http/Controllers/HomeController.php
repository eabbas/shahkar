<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\defaultComment;
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
        $defaultComments = defaultComment::all();
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
            'defaultComments' => $defaultComments,
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
