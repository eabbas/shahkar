<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\coursecategory;
use App\Models\teacher;
use App\Models\courselevel;
use App\Models\coursestatus;
use App\Models\logo;
use App\Models\teacher_course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function create()
    {
        $categories = coursecategory::all();
        $teachers = teacher::all();
        $levels = courselevel::all();
        $statuses = coursestatus::all();
        $logo = logo::first();
        return view("course.create", [
            'categories' => $categories,
            'teachers' => $teachers,
            'levels' => $levels,
            'statuses' => $statuses,
            'logo' => $logo
        ]);
    }

    public function store(Request $request)
    {

        if ($request->hasFile('img')) {
            $imgName = $request->img->getClientOriginalName();
            $imgPath = $request->img->storeAs('img', $imgName, 'public');
        } else {
            $imgPath = "";
        }

        if ($request->hasFile('video')) {
            $videoName = $request->video->getClientOriginalName();
            $videoPath = $request->video->storeAs('video', $videoName, 'public');
        } else {
            $videoPath = "";
        }
        // unset($request['_token']);
        $courseId = course::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'price' => $request->price,
            'discount' => $request->discount,
            'duration' => $request->duration,
            'progress' => $request->progress,
            'level_id' => $request->level_id,
            'status_id' => $request->status_id,
            'category_id' => $request->category_id,
            'img' => $imgPath,
            'video' => $videoPath,
            'free' => $request->has('free') ? 1 : 0,
            'show_in_home' => $request->has('show_in_home') ? 1 : 0
        ]);

        foreach ($request->teacher_id as $teacher_id) {
            teacher_course::create(['teacher_id' => $teacher_id, 'course_id' => $courseId]);
        }

        // $imgName = $request->img->getClientOriginalName();
        // $imgPath = $request->img->storeAs('img', $imgName, 'public');

        // $videoName = $request->video->getClientOriginalName();
        // $videoPath = $request->video->storeAs('video', $videoName, 'public');

        // if($request->homes){
        //     $courseId=course::insertGetId([
        //         'title'=>$request->title , 
        //         'description' => $request->description ,
        //         'summary' => $request->summary ,
        //         'price' => $request->price ,
        //         'discount' => $request->discount ,
        //         'duration' => $request->duration ,
        //         'progress' => $request->progress ,
        //         'level_id' => $request->level_id ,
        //         'status_id' => $request->status_id ,
        //         'category_id' => $request->category_id ,
        //         'img' =>$imgPath ,
        //         'video' =>$videoPath ,
        //         'free' =>$data['free']=$request->has('free') ? 1: 0 ,
        //         'show_in_home'=> $request->homes[0]
        //     ]);
        // }
        // else{
        //     $courseId=course::insertGetId([
        //     'title'=>$request->title , 
        //         'description' => $request->description ,
        //         'summary' => $request->summary ,
        //         'price' => $request->price ,
        //         'discount' => $request->discount ,
        //         'duration' => $request->duration ,
        //         'progress' => $request->progress ,
        //         'level_id' => $request->level_id ,
        //         'status_id' => $request->status_id ,
        //         'category_id' => $request->category_id ,
        //         'img' =>$imgPath ,
        //         'video' =>$videoPath ,
        //         'free' =>$data['free']=$request->has('free') ? 1: 0 ,
        //      ]);
        // }
        // teacher_course::create(['teacher_id'=>$request->teacher_id , 'course_id'=>$courseId]);
        return redirect('/course/courses');
    }

    public function index()
    {
        $courses = course::all();
        $logo = logo::first();
        return view("course.index", [
            'courses' => $courses,
            'logo' => $logo
        ]);
    }

    public function show(course $course)
    {
        $statuses = $course->statuses;
        $levels = $course->levels;
        $cat_course = $course->categories;
        return view("course.single", ['course' => $course, 'cat_course' => $cat_course, 'levels' => $levels, 'statuses' => $statuses]);
    }

    public function edit(course $course)
    {
        $teachers = teacher::all();
        $statuses = coursestatus::all();
        $levels = courselevel::all();
        $categories = coursecategory::all();
        return view('course.edit', ['course' => $course, 'categories' => $categories, 'teachers' => $teachers, 'levels' => $levels, 'statuses' => $statuses]);
    }

    public function update(Request $request)
    {
        $course = course::find($request->id);
        $teacher_course = teacher_course::where('course_id', $course->id)->first();
        $teacher_course->teacher_id = $request->teacher_id;
        $teacher_course->save();
        if ($request->img) {
            Storage::disk('public')->delete($course->img);
            $imgName = $request->img->getClientOriginalName();
            $imgPath = $request->img->storeAs('img', $imgName, 'public');
            $course->img = $imgPath;
        }
        if ($request->video) {
            Storage::disk('public')->delete($course->video);
            $videoName = $request->video->getClientOriginalName();
            $videoPath = $request->video->storeAs('video', $videoName, 'public');
            $course->video = $videoPath;
        }
        if ($request->homes) {
            $course->show_in_home = $request->homes[0];
        } else {
            $course->show_in_home = 0;
        }
        $course->title = $request->title;
        $course->description = $request->description;
        $course->summary = $request->summary;
        $course->discount = $request->discount;
        $course->duration = $request->duration;
        $course->progress = $request->progress;
        $course->level_id = $request->level_id;
        $course->status_id = $request->status_id;

        $course->category_id = $request->category_id;
        $course->free = $request->has('free') ? 1 : 0;
        $course->save();
        return redirect('/course/courses');
    }

    public function delete(course $course)
    {
        $course->delete();
        return redirect('/course/courses');
    }

    public function users(course $course)
    {
        $courseUsers = $course->users;
        return view("user.courseUsers", ["courseUsers" => $courseUsers, "course" => $course]);
    }
    public function seasons(course $course)
    {
        $seasons = $course->seasons;
        return view("season.index", ["seasons" => $seasons, "course" => $course]);
    }
}
