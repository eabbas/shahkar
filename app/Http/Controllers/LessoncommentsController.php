<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\footer_column;
use Illuminate\Http\Request;
use App\Models\lesson;
use App\Models\lessoncomments;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class LessoncommentsController extends Controller
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
    public function create(lesson $lesson)
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
        return view("user.lesson.comments.create", [
            "lesson" => $lesson,
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
    public function adminCreate(lesson $lesson)
    {
        $logo = logo::first();
        return view("admin.lesson.comments.create", [
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }

    public function store(Request $request, lesson $lesson)
    {
        $data = $request->all();
        $data['lesson_id'] = $lesson->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        lessoncomments::create($data);
        return redirect()->back();
        // return to_route('lessonComments_adminIndex', ['lesson' => $lesson->id]);
    }

    public function index(lesson $lesson)
    {
        //! 1 یوزری که نظر داده هم در آینده بعد از تکمیل کد ها 
        //! 2تبدیل تاریخ کریتت ات به شمسی برای آوردن در ویو 
        $lessoncomments = $lesson->lessoncomments;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.lesson.comments.index", [
            "lesson" => $lesson,
            "lessoncomments" => $lessoncomments,
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

    public function adminIndex(lesson $lesson)
    {
        //! 1 یوزری که نظر داده هم در آینده بعد از تکمیل کد ها 
        //! 2تبدیل تاریخ کریتت ات به شمسی برای آوردن در ویو 
        $lessoncomments = $lesson->lessoncomments;
        $logo = logo::first();
        return view("admin.lesson.comments.index", [
            "lesson" => $lesson,
            "lessoncomments" => $lessoncomments,
            'logo' => $logo
        ]);
    }

    public function edit(lesson $lesson, lessoncomments $lessoncomments)
    {
        $logo = logo::first();
        return view("admin.lesson.comments.edit", [
            "lesson"  => $lesson,
            "lessoncomments" => $lessoncomments,
            'logo' => $logo
        ]);
    }

    public function update(Request $request, lessoncomments $lessoncomments)
    {
        $lessoncomments->comment = $request->comment;
        $lessoncomments->status = $request->has('status') ? 1 : 0;
        $lessoncomments->save();
        return to_route('lessonComments_adminIndex', ['lesson' => $request->lesson_id]);
    }

    public function delete(lesson $lesson, lessoncomments $lessoncomments)
    {
        $lessoncomments->delete();
        return to_route('lessonComments_adminIndex', ['lesson' => $lesson->id]);
    }
}
