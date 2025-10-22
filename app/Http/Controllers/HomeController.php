<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\category;

class HomeController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        $cats = category::all();
        return view('home', ['settings' => $settings, 'categories' => $cats]);
    }
}
