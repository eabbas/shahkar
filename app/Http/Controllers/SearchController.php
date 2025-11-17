<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\settings;

class SearchController extends Controller
{
    public function index(category $category)
    {
        $settings = settings::all();
        $user = Auth::user();
        return view('search', ['settings' => $settings, 'category' => $category, 'user' => $user]);
    }
}
