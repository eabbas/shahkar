<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courselevel;

class CourseLevelController extends Controller
{
    public function create()
    {
        return view("level.create");
    }
    public function store(Request $request)
    {
            courselevel::create([
                'title'=>$request->title , 
            ]);
        return redirect('/level/levels');
        }
        
    public function index()
    {
        $levels = courselevel::all();
        return view("level.index" , ['levels'=>$levels]);
    }

    public function show(courselevel $level)
    {
        return view("level.single" , ['level'=>$level]);
    }

    public function edit(courselevel $courselevel)
    {
        return view('level.edit' , ['level'=>$courselevel]);
    }

    public function update(Request $request)
    {
        $level = courselevel::find($request->id);
        $level->title = $request->title;
        $level->save();
        return redirect('/level/levels');


    }

    public function delete(courselevel $courselevel)
    {
        $courselevel->delete();
        return redirect('/level/levels');

    }
}
