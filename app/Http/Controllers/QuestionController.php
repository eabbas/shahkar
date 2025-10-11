<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
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
        return view('question.index', ['questions' => $questions]);
    }
    public function show(question $question)
    {
        return view('question.show', ['question' => $question]);
    }
    public function edit(question $question)
    {
        $products = product::select('id', 'title')->get();
        $users = User::select('id', 'name', 'family')->get();
        return view('question.edit', ['question' => $question, 'products' => $products, 'users' => $users]);
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
        $question->delete();
        return to_route('question-index');
    }
}
