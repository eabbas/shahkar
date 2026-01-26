<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\footer_column;
use Illuminate\Http\Request;
use App\Models\lesson;
use App\Models\lessonerror;
use App\Models\lessonerrortitle;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Auth;

class lessonErrorController extends Controller
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
        $errortitles = lessonerrortitle::all();
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.lesson.error.create", [
            "lesson" => $lesson,
            "errortitles" => $errortitles,
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
        $errortitles = lessonerrortitle::all();
        return view("admin.lesson.error.create", ["lesson" => $lesson, "errortitles" => $errortitles, 'logo' => $logo]);
    }

    public function store(Request $request, lesson $lesson)
    {
        $data = $request->all();
        // dd($request -> errortype);
        $data['lesson_id'] = $lesson->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        lessonerror::create($data);
        return redirect()->back();
        // return to_route('lesson_errors', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson, lessonerror $lessonerror)
    {
        $errortitles = lessonerrortitle::all();
        $logo = logo::first();
        return view("admin.lesson.error.edit", ["lesson" => $lesson, "Error" => $lessonerror, "errortitles" => $errortitles, 'logo' => $logo]);
    }

    public function update(Request $request, lessonerror $lessonerror)
    {
        $lessonerror->error = $request->error;
        $lessonerror->status = $request->has('status') ? 1 : 0;
        $lessonerror->errortype = $request->errortype;
        $lessonerror->save();
        $lesson = $lessonerror->lesson;
        return to_route('lesson_errors', ['lesson' => $lesson->id]);
    }

    public function delete(lesson $lesson, lessonerror $lessonerror)
    {
        $lessonerror->delete();
        return to_route('lesson_errors', ['lesson' => $lesson->id]);
    }
}
