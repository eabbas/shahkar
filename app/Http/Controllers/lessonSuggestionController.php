<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\footer_column;
use Illuminate\Http\Request;
use App\Models\lesson;
use App\Models\lessonsuggestion;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Auth;

class lessonSuggestionController extends Controller
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
        return view("user.lesson.suggestion.create", [
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
        return view("admin.lesson.suggestion.create", [
            "lesson" => $lesson,
            'logo' => $logo
        ]);
    }

    public function store(Request $request, lesson $lesson)
    {
        $data = $request->all();
        $data['lesson_id'] = $lesson->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        unset($data['_token']);
        lessonsuggestion::create($data);
        return redirect()->back();
        // return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson, lessonsuggestion $lessonsuggestion)
    {
        $logo = logo::first();
        return view("admin.lesson.suggestion.edit", ["lesson" => $lesson, "Suggestion" => $lessonsuggestion, 'logo' => $logo]);
    }

    public function update(Request $request, lessonsuggestion $lessonsuggestion)
    {
        $lessonsuggestion->Suggestion = $request->Suggestion;
        $lessonsuggestion->status = $request->has('status') ? 1 : 0;
        $lessonsuggestion->save();

        $lesson = $lessonsuggestion->lesson;
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function delete(lesson $lesson, lessonsuggestion $lessonsuggestion)
    {
        $lessonsuggestion->delete();
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }
}
