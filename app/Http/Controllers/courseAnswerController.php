<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use Illuminate\Http\Request;
use App\Models\coursequestion;
use App\Models\courseanswer;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\product;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class courseAnswerController extends Controller
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
    public function create(coursequestion $coursequestion)
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
        return view("user.lesson.answer.create", [
            "question" => $coursequestion,
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
    public function adminCreate(coursequestion $coursequestion)
    {
        $logo = logo::first();
        return view("admin.lesson.answer.create", [
            "question" => $coursequestion,
            'logo' => $logo
        ]);
    }

    public function store(Request $request, coursequestion $coursequestion)
    {
        $data = $request->all();
        $data['question_id'] = $coursequestion->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        $data["parent_id"] = $request->has('parent_id') ? $request->parent_id : 0;
        courseanswer::create($data);
        return redirect()->back();
        // return to_route('question_answers', ['coursequestion' => $coursequestion->id]);
    }

    public function edit(courseanswer $courseanswer)
    {
        $logo = logo::first();
        return view("admin.lesson.answer.edit", ["answer" => $courseanswer, 'logo' => $logo]);
    }

    public function update(Request $request, courseanswer $courseanswer)
    {
        $courseanswer->answer = $request->answer;
        $courseanswer->status = $request->has('status') ? $request->status : 0;
        $courseanswer->save();
        $question = $courseanswer->question;
        return to_route('question_adminAnswers', ['coursequestion' => $question->id]);
    }

    public function delete(courseanswer $courseanswer)
    {
        $courseanswer->delete();
        $question = $courseanswer->question;
        return to_route('question_adminAnswers', ['coursequestion' => $question->id]);
    }

    public function reactions(courseanswer $courseanswer)
    {
        $reactions = $courseanswer->reactions;
        $courses = course::all();
        $logo = logo::first();
        $products = product::all();
        $products = $this->getProductMedias($products);
        $settings = settings::all();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        $user = Auth::user();
        $categories = category::all();
        return view("user.lesson.answerReaction.index", [
            "reactions" => $reactions,
            "answer" => $courseanswer,
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
    public function adminReactions(courseanswer $courseanswer)
    {
        $reactions = $courseanswer->reactions;
        $logo = logo::first();
        return view("admin.lesson.answerReaction.index", [
            "reactions" => $reactions,
            "answer" => $courseanswer,
            'logo' => $logo
        ]);
    }
}
