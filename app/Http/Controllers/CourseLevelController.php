<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courselevel;
use App\Models\logo;

class CourseLevelController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        return view("admin.courseLevel.create", ['logo' => $logo]);
    }
    public function store(Request $request)
    {
        courselevel::create([
            'title' => $request->title,
        ]);
        return to_route('courseLevel.list');
    }

    public function index()
    {
        $levels = courselevel::all();
        $logo = logo::first();
        return view("admin.courseLevel.index", [
            'levels' => $levels,
            'logo' => $logo
        ]);
    }

    public function show(courselevel $courseLevel)
    {
        $logo = logo::first();
        return view("admin.courseLevel.single", [
            'level' => $courseLevel,
            'logo' => $logo
        ]);
    }

    public function edit(courselevel $courseLevel)
    {
        $logo = logo::first();
        return view('admin.courseLevel.edit', [
            'level' => $courseLevel,
            'logo' => $logo
        ]);
    }

    public function update(Request $request)
    {
        $level = courselevel::find($request->id);
        $level->title = $request->title;
        $level->save();
        return to_route('courseLevel.list');
    }

    public function delete(courselevel $courseLevel)
    {
        $courseLevel->delete();
        return to_route('courseLevel.list');
    }

    public function deleteAll(Request $request){
        if(!isset($request->levels)){
            return redirect()->back();
        }
        foreach($request->levels as $level_id){
            $level = courseLevel::find($level_id);
            $level->delete();
        }
        return redirect()->back();
    }
}
