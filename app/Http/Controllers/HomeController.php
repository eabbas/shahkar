<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\product;

class HomeController extends Controller
{
    public function index(){
        $products = product::all();
        $settings = settings::all();
        return view('home', ['settings'=>$settings, 'products'=>$products]);
    }
}
