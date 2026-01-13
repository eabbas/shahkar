<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\userCourse;
use App\Models\course;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class UserCourseController extends Controller
{
    public function getProductMedias($products)
    {
        foreach ($products as $product) {
            $product->load(['medias' => function ($query) {
                $query->select('product_id', DB::raw("IFNULL(path , 'images/noImage.png') path"))->where('is_main', 1);
            }]);
            foreach ($product->medias as $media) {
                $product['img'] = asset('storage/images/noImage.png');
                if (Storage::disk('public')->exists($media['path'])) {
                    $product['img'] = asset('storage/' . $media['path']);
                }
            }
        }
        return $products;
    }
    public function store(course $course)
    {
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $categories = category::all();
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
            return view("user.course.userCourse.signup", [
                'course' => $course,
                'cat_course' => $cat_course,
                'levels' => $levels,
                'statuses' => $statuses,
                'courses' => $courses,
                'logo' => $logo,
                'categories' => $categories,
                'courses' => $courses,
                'products' => $products,
                'settings' => $settings,
                'footerColumns' => $footer_columns,
                'footer_form_column' => $footer_form_column,
                'user' => $user
            ]);
        }

        return to_route("user.courses", [
            "user" => auth()->id(),
            'courses' => $courses,
            'logo' => $logo,
            'categories' => $categories,
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            // 'user' => $user
        ]);
    }

    public function index()
    {
        $userCourses = userCourse::all();
        return view("user.course.userCourse.index", ['userCourses' => $userCourses]);
    }

    public function show(userCourse $userCourse)
    {
        $user_course = course::where('id', $userCourse->course_id)->first();
        return view("user.course.userCourse.single", ['userCourse' => $userCourse, 'user_course' => $user_course]);
    }

    public function edit(userCourse $userCourse)
    {
        $courses = course::all();
        return view('user.course.userCourse.edit', ['userCourse' => $userCourse, 'courses' => $courses]);
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
