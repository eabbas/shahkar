<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lessonerrortitle;
use App\Models\logo;

class lessonErrortitleController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        return view("admin.lesson.error.errortitle.create", ['logo' => $logo]);
    }

    public function store(Request $request)
    {
        lessonerrortitle::create($request->all());
        return to_route("errortitle_index");
    }

    public function index()
    {
        $errortitles = lessonerrortitle::all();
        $logo = logo::first();
        return view("admin.lesson.error.errortitle.index", ['errortitles' => $errortitles, 'logo' => $logo]);
    }

    public function edit(lessonerrortitle $lessonerrortitle)
    {
        $logo = logo::first();
        return view("admin.lesson.error.errortitle.edit", ["errortitle" => $lessonerrortitle, 'logo' => $logo]);
    }

    public function update(Request $request, lessonerrortitle $lessonerrortitle)
    {
        $lessonerrortitle->title = $request->title;
        $lessonerrortitle->save();
        return to_route("errortitle_index");
    }

    public function delete(lessonerrortitle $lessonerrortitle)
    {
        $lessonerrortitle->delete();
        return to_route("errortitle_index");
    }
}
