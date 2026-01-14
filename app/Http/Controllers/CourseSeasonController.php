<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\courseseason;
use App\Models\course;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class CourseSeasonController extends Controller
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
    public function create(course $course)
    {
        $courses = course::all();
        $logo = logo::first();
        return view("admin.season.create", [
            "courses" => $courses,
            "course" => $course,
            'logo' => $logo
        ]);
    }
    public function store(Request $request)
    {
        courseseason::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'free' => $request->has('free') ? 1 : 0,
            'course_id' => $request->course_id,
            'order' => $request->order,
        ]);
        return to_route("course.adminSeasons", ["course" => $request->course_id]);
    }

    // public function index()
    // {
    //     $seasons = season::all();
    //     return view("season.index" , ['seasons'=>$seasons]);
    // }

    public function adminShow(courseseason $courseseason)
    {
        $logo = logo::first();
        return view("admin.season.single", [
            'season' => $courseseason,
            'logo' => $logo
        ]);
    }

    public function show(courseseason $courseseason)
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
        return view("user.season.single", [
            'season' => $courseseason,
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

    public function edit(courseseason $courseseason)
    {
        $courses = course::all();
        $logo = logo::first();
        return view('admin.season.edit', [
            'season' => $courseseason,
             'courses' => $courses,
             'logo' => $logo
            ]);
    }

    public function update(Request $request)
    {
        $season = courseseason::find($request->id);
        $season->title = $request->title;
        $season->description = $request->description;
        $season->price = $request->price;
        $season->course_id = $request->course_id;
        $season->order = $request->order;
        $season->free = $request->has('free') ? 1 : 0;
        $season->save();
        return to_route("course.adminSeasons", ["course" => $request->course_id]);
    }

    public function delete(courseseason $courseseason)
    {
        $courseseason->delete();
        return redirect()->back();
        // return to_route("course.seasons", ["course" => $courseseason->course]);
        // return redirect('/season/seasons');
    }
    public function lessons(courseseason $courseseason)
    {
        $lessons = $courseseason->lessons;
        return view("lesson.index", ["lessons" => $lessons]);
        // return to_route("course.seasons" , ["course" => $season -> course ]);
        // // return redirect('/season/seasons');
    }
}
