<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\courseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        $courseCategories = courseCategory::all();
        return view('admin.course.create', ["courseCategories" => $courseCategories]);
    }
    public function store(Request $request)
    {
        course::create([
            'title' => $request->title,
            'description' => $request->description,
            'courseCategory_id' => $request->courseCategory_id,
        ]);
        return to_route('course-adminIndex');
    }
    public function index()
    {
        $courses = course::with('courseCategory')->get();
        return view('user.course.index', ['courses' => $courses]);
    }
    public function adminIndex()
    {
        $courses = course::with('courseCategory')->get();
        return view('admin.course.index', ['courses' => $courses]);
    }
    public function show(course $course)
    {
        $course->courseCategory;
        return view('user.course.show', ['course' => $course]);
    }
    public function adminShow(course $course)
    {
        $course->courseCategory;
        return view('admin.course.show', ['course' => $course]);
    }
    public function edit(course $course)
    {
        $course->category;
        $courseCategories = courseCategory::all();
        return view('admin.course.edit', ['course' => $course, 'courseCategories' => $courseCategories]);
    }
    public function update(Request $request)
    {
        $course = course::find($request->course_id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->courseCategory_id = $request->courseCategory_id;
        $course->save();
        return to_route('course-adminIndex');
    }
    public function delete(course $course)
    {
        $course->delete();
        return to_route('course-adminIndex');
    }
}
