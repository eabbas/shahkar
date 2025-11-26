<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(category $category)
    {
        $settings = settings::all();
        $user = Auth::user();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        return view('search', [
            'settings' => $settings,
            'category' => $category,
            'user' => $user,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }
}
