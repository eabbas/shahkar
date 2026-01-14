<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\coursecategory;
use App\Models\teacher;
use App\Models\courselevel;
use App\Models\coursestatus;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use App\Models\teacher_course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class CourseController extends Controller
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
    public function create()
    {
        $categories = coursecategory::all();
        $teachers = teacher::all();
        $levels = courselevel::all();
        $statuses = coursestatus::all();
        $logo = logo::first();
        return view("admin.course.create", [
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
        return to_route('course.adminList');
    }

    public function adminIndex()
    {
        $courses = course::all();
        $logo = logo::first();
        return view("admin.course.index", [
            'courses' => $courses,
            'logo' => $logo
        ]);
    }

    public function index()
    {
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.course.index", [
            'courses' => $courses,
            'logo' => $logo,
            'categories' => $categories,
            'logo' => $logo,
            'courses' => $courses,
            'products' => $products,
            'settings' => $settings,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }

    public function adminShow(course $course)
    {
        $statuses = $course->statuses;
        $levels = $course->levels;
        $cat_course = $course->categories;
        $logo = logo::first();
        return view("admin.course.single", [
            'course' => $course,
            'cat_course' => $cat_course,
            'levels' => $levels,
            'statuses' => $statuses,
            'logo' => $logo
        ]);
    }
    public function show(course $course)
    {
        $statuses = $course->statuses;
        $levels = $course->levels;
        $cat_course = $course->categories;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.course.single", [
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

    public function edit(course $course)
    {
        $teachers = teacher::all();
        $statuses = coursestatus::all();
        $levels = courselevel::all();
        $categories = coursecategory::all();
        $logo = logo::first();
        return view('admin.course.edit', [
            'course' => $course,
            'categories' => $categories,
            'teachers' => $teachers,
            'levels' => $levels,
            'statuses' => $statuses,
            'logo' => $logo,
        ]);
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
        return to_route('course.adminList');
    }

    public function delete(course $course)
    {
        $course->delete();
        // return to_route('course.adminList');
        return redirect()->back();
    }

    public function users(course $course)
    {
        $courseUsers = $course->users;
        $logo = logo::first();
        return view("admin.course.courseUsers", [
            "courseUsers" => $courseUsers,
            "course" => $course,
            'logo' => $logo
        ]);
    }
    public function adminSeasons(course $course)
    {
        $seasons = $course->seasons;
        $logo = logo::first();
        return view("admin.season.index", [
            "seasons" => $seasons,
            "course" => $course,
            'logo' => $logo
        ]);
    }
    public function seasons(course $course)
    {
        $seasons = $course->seasons;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.season.index", [
            "seasons" => $seasons,
            "course" => $course,
            'courses' => $courses,
            'logo' => $logo,
            'categories' => $categories,
            'products' => $products,
            'settings' => $settings,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
            'user' => $user
        ]);
    }
}
