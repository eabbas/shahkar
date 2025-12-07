<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Models\category;
use App\Models\product;
use App\Models\footer_column;
use App\Models\settings;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function create()
    {
        $aboutus = aboutUs::all();
        return view('admin.aboutus.create', ['aboutus' => $aboutus]);
    }

    public function upsert(Request $request)
    {
        $aboutus = aboutUs::all();
        if (count($aboutus) == 1) {
            $this->update($request);
            return to_route('aboutus-index');
        } else {
            $this->store($request);
            return to_route('aboutus-index');
        }
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
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
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
