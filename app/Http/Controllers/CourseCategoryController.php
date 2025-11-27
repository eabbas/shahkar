<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\courseCategory;
use App\Models\footer_column;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\settings;

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
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        $courseCategories = courseCategory::all();
        return view('user.courseCategory.index', [
            'settings' => $settings,
            'courseCategories' => $courseCategories,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminIndex()
    {
        $courseCategories = courseCategory::all();
        return view('admin.courseCategory.index', ['courseCategories' => $courseCategories]);
    }

    public function show(courseCategory $courseCategory)
    {
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::whereIn('section_number', [4])->with('images')->with('texts')->get();
        $user = Auth::user();
        return view('user.courseCategory.show', [
            'settings' => $settings,
            'courseCategory' => $courseCategory,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
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
