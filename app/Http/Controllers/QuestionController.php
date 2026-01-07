<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\question;
use App\Models\User;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class QuestionController extends Controller
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
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return to_route('user_login');
        }
        question::create([
            'text' => $request->text,
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'active' => 1
        ]);
        return redirect('product/show/' . $request->product_id);
    }
    public function index()
    {
        $questions = question::all();
        $logo = logo::first();
        return view('admin.question.index', [
            'questions' => $questions,
            'logo' => $logo
        ]);
    }
    public function show(question $question)
    {
        return view('admin.question.show', ['question' => $question]);
    }
    public function edit(question $question)
    {
        $products = product::select('id', 'title')->get();
        $products = $this->getProductMedias($products);
        $users = User::select('id', 'name', 'family')->get();
        return view('admin.question.edit', ['question' => $question, 'products' => $products, 'users' => $users]);
    }
    public function update(Request $request)
    {
        $question = question::find($request->question_id);
        $question->text = $request->text;
        $question->product_id = $request->product_id;
        $question->user_id = $request->user_id;
        $question->active = $request->activity;
        $question->save();
        return to_route('question-index');
    }
    public function delete(question $question)
    {
        $question->answers()->delete();
        $question->delete();
        return to_route('question-index');
    }
}
