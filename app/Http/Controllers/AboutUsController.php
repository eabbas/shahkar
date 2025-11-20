<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use Illuminate\Http\Request;

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
            'image' => "storage/" . $path
        ]);
        return to_route('aboutus-index');
    }
    public function index()
    {
        $aboutus = aboutUs::all();
        return view('aboutus', ['aboutus' => $aboutus]);
    }
    public function update(Request $request)
    {
        aboutUs::query()->delete();
        return $this->store($request);
    }
}
