<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\category;
use App\Models\product;
use App\Models\footer_column;
use App\Models\settings;
use App\Models\logo;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class AboutUsController extends Controller
{
    public function getProductMedias($products)
    {
        foreach ($products as $product) {
            $product->load(['medias' => function ($query) {
                $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
            }]);
            foreach ($product->medias as $media) {
                $product['img'] = asset('storage/images/noImage.png');
                if (Storage::disk('public')->exists($media['path'])) {
                    $product['img'] = asset('storage/' . $media['path']);
                }
            }
        }
        return $products;
    }
    public function create()
    {
        $aboutus = aboutUs::all();
        $logo = logo::first();
        return view('admin.aboutus.create', [
            'aboutus' => $aboutus,
            'logo' => $logo
        ]);
    }

    public function upsert(Request $request)
    {
        $aboutus = aboutUs::all();
        if (count($aboutus) == 1) {
            $this->update($request);
        } else {
            $this->store($request);
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $originalName = request()->image->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', time() . $originalName, 'public');
        aboutUs::create([
            'description' => $request->description,
            'image' => 'storage/' . $path
        ]);
        return to_route('aboutus-index');
    }

    public function index()
    {
        $courses = course::all();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $aboutus = aboutUs::all();
        return view('aboutus', [
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'aboutus' => $aboutus,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        aboutUs::query()->delete();
        return $this->store($request);
    }
}
