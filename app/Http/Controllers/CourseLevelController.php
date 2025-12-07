<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courselevel;

class CourseLevelController extends Controller
{
    public function create()
    {
        return view("courseLevel.create");
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
        return view("courseLevel.index", ['levels' => $levels]);
    }

    public function show(courselevel $courseLevel)
    {
        return view("courseLevel.single", ['level' => $courseLevel]);
    }

    public function edit(courselevel $courseLevel)
    {
        return view('courseLevel.edit', ['level' => $courseLevel]);
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
}
