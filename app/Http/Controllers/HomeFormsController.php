<?php

namespace App\Http\Controllers;

use App\Models\homeForms;
use App\Models\logo;
use Illuminate\Http\Request;

class HomeFormsController extends Controller
{
    public function store(Request $request)
    {
        homeForms::create($request->all());
        return to_route('home');
    }
    public function index()
    {
        $homeForms = homeForms::all();
        $logo = logo::all();
        return view('admin.homeForm.index', [
            'homeForms' => $homeForms,
            'logo' => $logo
        ]);
    }
    public function edit(homeForms $homeForms)
    {
        return view('admin.homeForm.edit', ['homeForms' => $homeForms]);
    }
    public function update(Request $request)
    {
        $homeForms = homeForms::find($request->id);
        $homeForms->contactMethod = $request->contactMethod;
        $homeForms->save();
        return to_route('homeForm-index');
    }
    public function delete(homeForms $homeForms)
    {
        $homeForms->delete();
        return to_route('homeForm-index');
    }
}
