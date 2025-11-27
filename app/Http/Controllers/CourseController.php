<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\course;
use App\Models\courseCategory;
use App\Models\footer_column;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\settings;

class CourseController extends Controller
{
    public function create()
    {
        $courseCategories = courseCategory::all();
        return view('admin.course.create', ['courseCategories' => $courseCategories]);
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
                $products = product::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        $courses = course::with('courseCategory')->get();
        return view('user.course.index', [
                        'products' => $products,
            'settings' => $settings,
            'courses' => $courses,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminIndex()
    {
        $courses = course::with('courseCategory')->get();
        return view('admin.course.index', ['courses' => $courses]);
    }

    public function show(course $course)
    {
        $course->courseCategory;
                $products = product::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('user.course.show', [
                        'products' => $products,
            'settings' => $settings,
            'course' => $course,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
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
