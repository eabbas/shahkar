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
        return view('course.create', ["courseCategories" => $courseCategories]);
    }
    public function store(Request $request)
    {
        course::create([
            'title' => $request->title,
            'description' => $request->description,
            'courseCategory_id' => $request->courseCategory_id,
        ]);
        return to_route('course-index');
    }
    public function index()
    {
        $courses = course::with('courseCategory')->get();
        return view('course.index', ['courses' => $courses]);
    }
    public function show(course $course)
    {
        $course->courseCategory;
        return view('course.show', ['course' => $course]);
    }
    public function edit(course $course)
    {
        $course->category;
        $courseCategories = courseCategory::all();
        return view('course.edit', ['course' => $course, 'courseCategories' => $courseCategories]);
    }
    public function update(Request $request)
    {
        $course = course::find($request->course_id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->courseCategory_id = $request->courseCategory_id;
        $course->save();
        return to_route('course-index');
    }
    public function delete(course $course)
    {
        $course->delete();
        return to_route('course-index');
    }
}
