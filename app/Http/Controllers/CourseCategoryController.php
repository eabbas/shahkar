<?php

namespace App\Http\Controllers;

use App\Models\courseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function create()
    {
        $courseCategories = courseCategory::select('id', 'title')->get();
        return view('admin.courseCategory.create', ['courseCategories' => $courseCategories]);
    }
    public function store(Request $request)
    {
        courseCategory::create($request->all());
        return to_route('courseCategory-adminIndex');
    }
    public function index()
    {
        $courseCategories = courseCategory::all();
        return view('user.courseCategory.index', ['courseCategories' => $courseCategories]);
    }
    public function adminIndex()
    {
        $courseCategories = courseCategory::all();
        return view('admin.courseCategory.index', ['courseCategories' => $courseCategories]);
    }
    public function show(courseCategory $courseCategory)
    {
        return view('user.courseCategory.show', ['courseCategory' => $courseCategory]);
    }
    public function adminShow(courseCategory $courseCategory)
    {
        return view('admin.courseCategory.show', ['courseCategory' => $courseCategory]);
    }
    public function edit(courseCategory $courseCategory)
    {
        $courseCategories = courseCategory::all();
        return view('admin.courseCategory.edit', ['courseCat' => $courseCategory, 'courseCategories' => $courseCategories]);
    }
    public function update(Request $request)
    {
        $courseCategory = courseCategory::find($request->courseCategory_id);
        $courseCategory->title = $request->title;
        $courseCategory->parent_id = $request->parent_id;
        $courseCategory->save();
        return to_route('courseCategory-adminIndex');
    }
    public function delete(courseCategory $courseCategory)
    {
        $courseCategory->delete();
        return to_route('courseCategory-adminIndex');
    }
}
