<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\courseanswer;
use Illuminate\Support\Facades\Auth;


class courseAnswerController extends Controller
{
    public function create(question $question){
        return view("lesson.answer.create" , ["question" => $question]);
    }

    public function store(Request $request ,question $question){
        $data = $request->all();
        $data ['question_id'] = $question -> id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        $data["parent_id"] = $request->has('parent_id') ? $request -> parent_id : 0;
        courseanswer::create($data);
        return to_route('question_answers', ['question' => $question->id]);
    }

    public function edit(courseanswer $courseanswer){
        return view("lesson.answer.edit" , ["answer" => $courseanswer]);
    }

    public function update(Request $request ,courseanswer $courseanswer){
        $courseanswer -> answer = $request -> answer;
        $courseanswer -> status = $request->has('status') ? $request -> status : 0;
        $courseanswer -> save();
        $question = $courseanswer -> question;
        return to_route('question_answers', ['question' => $question->id]);
    }

    public function delete(courseanswer $courseanswer){
        $courseanswer -> delete();
        $question = $courseanswer -> question;
        return to_route('question_answers', ['question' => $question->id]);
    }

    public function reactions(courseanswer $courseanswer){
        $reactions = $courseanswer -> reactions;
        return view("lesson.answerReaction.index" ,["reactions" =>$reactions , "answer" => $courseanswer]);
    }

}
