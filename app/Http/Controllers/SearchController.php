<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;

class SearchController extends Controller
{
    public function index(){
        $settings = settings::all();
        return view('search', ['settings'=>$settings]);
    }
}
