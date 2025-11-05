<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\settings;

class SearchController extends Controller
{
    public function index(category $category)
    {
        $settings = settings::all();
        // foreach ($category->products as $product) {
        //     foreach ($product->medias as $media) {
        //         if ($media['is_main'] == 1) {
        //             echo $media['product_id'];
        //         }
        //     }
        // }
        // return $category;
        return view('search', ['settings' => $settings, 'category' => $category]);
    }
}
