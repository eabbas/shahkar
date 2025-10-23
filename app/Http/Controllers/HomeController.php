<?php

namespace App\Http\Controllers;

use App\Models\banners;
use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\category;

class HomeController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        $cats = category::all();
        $banners = banners::where('sectionName', 'banners')->get();
        return view('home', ['settings' => $settings, 'categories' => $cats, 'banners' => $banners]);
    }
}
