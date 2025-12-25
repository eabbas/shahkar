<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\product;
use App\Models\question;
use App\Models\User;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        answer::create([
            'text' => $request->answer,
            'question_id' => $request->question_id,
            'parent_id' => $request->parent_id,
            'user_id' => Auth::id()
        ]);
        return redirect('product/show/' . $request->product_id);
    }
    public function index()
    {
        $answers = answer::all();
        $logo = logo::all();
        return view('admin.answer.index', [
            'answers' => $answers,
            'logo' => $logo
        ]);
    }
    public function show(answer $answer)
    {
        return view('admin.answer.show', ['answer' => $answer]);
    }
    public function edit(answer $answer)
    {
        // ! تو ویوی این قسمت نیاز به ایجکس داریم واسه اینکه پاسخ های مربوط به هر سوال انتخاب شده داخل سلکت باکس رو بیاریم
        $questions = question::select('id', 'text')->get();
        $answers = answer::select('id', 'text')->get();
        $users = User::select('id', 'name', 'family')->get();
        return view('admin.answer.edit', ['answer' => $answer, 'questions' => $questions, 'answers' => $answers, 'users' => $users]);
    }
    public function update(Request $request)
    {
        $answer = answer::find($request->answer_id);
        $answer->text = $request->text;
        $answer->question_id = $request->question_id;
        $answer->parent_id = $request->parent_id;
        $answer->user_id = $request->user_id;
        $answer->save();
        return to_route('answer-index');
    }
    public function delete(answer $answer)
    {
        $answer->delete();
        return to_route('answer-index');
    }
}
