<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lessonerrortitle;

class lessonErrortitleController extends Controller
{
    public function create()
    {
        return view("lesson.error.errortitle.create");
    }

    public function store(Request $request)
    {
        lessonerrortitle::create($request->all());
        return to_route("errortitle_index");
    }

    public function index()
    {
        $errortitles = lessonerrortitle::all();
        return view("lesson.error.errortitle.index", ['errortitles' => $errortitles]);
    }

    public function edit(lessonerrortitle $lessonerrortitle)
    {
        return view("lesson.error.errortitle.edit", ["errortitle" => $lessonerrortitle]);
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
