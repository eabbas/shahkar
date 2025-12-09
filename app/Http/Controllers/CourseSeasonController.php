<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseseason;
use App\Models\course;

class CourseSeasonController extends Controller
{
     
    public function create(course $course)
    {
        $courses = course::all();
        return view("season.create" ,["courses" => $courses , "course" => $course]);
    }
    public function store(Request $request)
    {
            courseseason::create([
                'title'=>$request->title , 
                'description' => $request->description ,
                'price' => $request->price ,
                'free' => $request->has('free') ? 1 : 0,
                'course_id' => $request->course_id ,
                'order' => $request->order ,
            ]);
            return to_route("course.seasons" , ["course" => $request->course_id ]);
        }
        
    // public function index()
    // {
    //     $seasons = season::all();
    //     return view("season.index" , ['seasons'=>$seasons]);
    // }

    public function show(courseseason $courseseason)
    {
        return view("season.single" , ['season'=>$courseseason]);
    }

    public function edit(courseseason $courseseason)
    {
       $courses = course::all();
        return view('season.edit' , ['season'=>$courseseason , 'courses'=>$courses]);
    }

    public function update(Request $request)
    {
        $season = courseseason::find($request->id);
        $season->title = $request->title;
        $season->description = $request->description;
        $season->price = $request->price;
        $season->course_id = $request->course_id;
        $season->order = $request->order;
        $season->free = $request->has('free') ? 1 : 0 ;
        $season->save();
        return to_route("course.seasons" , ["course" => $request->course_id ]);


    }

    public function delete(courseseason $courseseason)
    {
        $courseseason->delete();
        return to_route("course.seasons" , ["course" => $courseseason -> course ]);
        // return redirect('/season/seasons');
    }
    public function lessons(courseseason $courseseason)
    {
        $lessons = $courseseason->lessons;
        return view("lesson.index" , ["lessons" => $lessons]);
        // return to_route("course.seasons" , ["course" => $season -> course ]);
        // // return redirect('/season/seasons');
    }
}
