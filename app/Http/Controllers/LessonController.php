<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use App\Models\lesson;
use App\Models\course;
use App\Models\courseseason;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
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
    public function lesson()
    {
        return view("lesson.lesson");
    }

    public function create(courseseason $season, course $course)
    {
        $courses = course::all();
        $seasons = courseseason::all();
        $logo = logo::first();
        return view("admin.lesson.create", [
            'logo' => $logo,
            "courses" => $courses,
            "seasons" => $seasons,
            "season" => $season,
            "course"  => $course,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['free'] = $request->has('free') ? 1 : 0;
        if ($request->hasFile('video')) {
            $originalName = $request->video->getClientOriginalName();
            $fileName = Str::uuid() . "_" . $originalName;
            $type = $request->video->getClientOriginalExtension();
            $filePath = $request->video->storeAs($type, $fileName, 'public');
            $data["video_path"] = $filePath;
            $data["video_type"] = $type;
        }
        unset($data["_token"]);
        unset($data["video"]);
        $lesson_id = lesson::insertGetId($data);
        return to_route("lesson_index", ["lesson" => $lesson_id]);
    }


    public function index()
    {
        $lessons = lesson::all();
        $logo = logo::first();
        return view("admin.lesson.index", [
            "lessons" => $lessons,
            'logo' => $logo
        ]);
    }

    public function delete(lesson $lesson)
    {
        $lesson->delete();
        $season = $lesson->season;
        $lessons = $season->lessons;
        return to_route('lesson_index', ["lessons" => $lessons]);
    }

    public function edit(lesson $lesson)
    {
        $courses = course::all();
        $seasons = courseseason::all();
        $logo = logo::first();
        return view("admin.lesson.edit", [
            "courses" => $courses,
            "lesson"  => $lesson,
            "seasons" => $seasons,
            'logo' => $logo
        ]);
    }


    public function adminShow(lesson $lesson)
    {
        $logo = logo::first();
        return view('admin.lesson.single', [
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }
    public function show(lesson $lesson)
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
        return view('user.lesson.single', [
            "lesson" => $lesson,
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

    public function update(Request $request, lesson $lesson)
    {
        $lesson->course_id = $request->course_id;
        $lesson->title = $request->title;
        $lesson->description = $request->description;
        $lesson->price = $request->price;
        $lesson->season_id = $request->season_id;
        $lesson->free = $request->has('free') ? 1 : 0;
        $lesson->order = $request->order;
        $lesson->duration = $request->duration;

        if ($request->hasFile("video")) {
            if (Storage::disk('public')->exists($lesson->video_path)) {
                Storage::disk('public')->delete($lesson->video_path);
            }
            $originalName = $request->video->getClientOriginalName();
            $fileName = Str::uuid() . "_" . $originalName;
            $type = $request->video->getClientOriginalExtension();
            $filePath = $request->video->storeAs($type, $fileName, 'public');
            $lesson->video_path = $filePath;
            $lesson->video_type = $type;
        }

        $lesson->save();
        return to_route("lesson_adminShow", [$lesson]);
    }

    public function attachfile(lesson $lesson)
    {
        $logo = logo::first();
        return view("admin.lesson.attachments.create", [
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }

    public function errors(lesson $lesson)
    {
        // $errors = $lesson->load('errors');
        $lessoErrors = $lesson->errors;
        $logo = logo::first();
        return view("admin.lesson.error.index", [
            "lessoErrors" => $lessoErrors,
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }

    public function suggestions(lesson $lesson)
    {
        $suggestions = $lesson->suggestions;
        $logo = logo::first();
        return view("admin.lesson.suggestion.index", [
            "suggestions" => $suggestions,
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }

    public function adminQuestions(lesson $lesson)
    {
        $questions = $lesson->questions;
        $logo = logo::first();
        return view("admin.lesson.question.index", [
            "questions" => $questions,
            "lesson" => $lesson,
            'logo' => $logo,
        ]);
    }
    public function questions(lesson $lesson)
    {
        $questions = $lesson->questions;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.lesson.question.index", [
            "questions" => $questions,
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

    public function adminShowLessonAttachments(lesson $lesson)
    {
        $attachments = $lesson->attachments;
        $logo = logo::first();
        return view("admin.lesson.attachments.index", [
            "lesson" => $lesson,
            "attachments" => $attachments,
            'logo' => $logo
        ]);
    }
    public function showLessonAttachments(lesson $lesson)
    {
        $attachments = $lesson->attachments;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.lesson.attachments.index", [
            "lesson" => $lesson,
            "attachments" => $attachments,
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
}
