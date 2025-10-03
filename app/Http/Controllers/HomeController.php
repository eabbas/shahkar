<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;

class HomeController extends Controller
{
    public function index(){
        $settings = settings::all();
        return view('home', ['settings'=>$settings]);
    }
}
