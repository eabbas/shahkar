<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userCourse;
use App\Models\course;

class UserCourseController extends Controller
{
    public function store(course $course)
    {
        if (userCourse::where('user_id', auth()->id())->where('course_id', $course->id)->first()) {
            return "شما قبلاً  در دوره شرکت کردید ";
        }
        $user = auth()->user();
        if ($course->free) {
            userCourse::create(
                [
                    "user_id" => auth()->id(),
                    "course_id" => $course->id,
                    "status" => "1"
                ]
            );
        }
        if (!$course->free) {
            $statuses = $course->statuses;
            $levels = $course->levels;
            $cat_course = $course->categories;
            return view("course.userCourse.signup", ['course' => $course, 'cat_course' => $cat_course, 'levels' => $levels, 'statuses' => $statuses]);
        }

        return to_route("user.courses", ["user" => auth()->id()]);
    }



    // public function store(Request $request)
    // {
    //         userCourse::create([
    //             'title'=>$request->title , 
    //             'user_id' => 1 ,
    //             'status' => $request->status ,
    //             'progress' => $request->progress ,
    //             'course_id' => $request->course_id,
    //         ]);
    //     return redirect('/userCourse/userCourses');
    // }
    public function index()
    {
        $userCourses = userCourse::all();
        return view("course.userCourse.index", ['userCourses' => $userCourses]);
    }

    public function show(userCourse $userCourse)
    {
        $user_course = course::where('id', $userCourse->course_id)->first();
        return view("course.userCourse.single", ['userCourse' => $userCourse, 'user_course' => $user_course]);
    }

    public function edit(userCourse $userCourse)
    {
        $courses = course::all();
        return view('course.userCourse.edit', ['userCourse' => $userCourse, 'courses' => $courses]);
    }
    public function update(Request $request)
    {
        $userCourse = userCourse::find($request->id);
        $userCourse->course_id = $request->course_id;
        $userCourse->progress = $request->progress;
        $userCourse->status = $request->status;
        $userCourse->save();
        $user  = $userCourse->user;
        return to_route("user.courses", ["user" => $user]);
    }
    public function delete(userCourse $userCourse)
    {
        $userCourse->delete();
        $user  = $userCourse->user;
        return to_route("user.courses", ["user" => $user]);
    }
    public function comments(userCourse $userCourse)
    {
        return view('userCourse.comments', ['userCourse' => $userCourse]);
    }
}
