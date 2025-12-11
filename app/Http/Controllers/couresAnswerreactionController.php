<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\answer;
use App\Models\answerreaction;
use Illuminate\Support\Facades\Auth;

class couresAnswerreactionController extends Controller
{
    // public function create(answer $answer){
    //     return view("lesson.answerReaction.create" , ["answer" => $answer]);
    // }


    public function store(Request $request ,courseanswer $courseanswer){
        // $reaction = answerreaction::where("user_id" ,auth()->id()) -> where("answer_id" , $answer -> id) ->first();
        // $reaction = answerreaction::where("user_id" ,0) -> where("answer_id" , $answer -> id) ->first();
        // if($reaction){
        //     $reaction -> reaction = $request -> reaction;
        //     $reaction -> save();
        //     dd($request -> reaction);
        // }else{
        //     $data = $request->all();
        //     $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        //     $data ['answer_id'] = $answer -> id;
        //     $data["reaction"] = $request->has('reaction') ? $request -> reaction : 0;
        //     answerreaction::create($data);
        // }
        courseanswerreaction::updateOrCreate(
            [
                'user_id'   =>  Auth::id(),
                'answer_id' => $courseanswer->id
            ],
            [
                'reaction'  => $request->reaction ?? 0
            ]
         );

        $question = $courseanswer -> question ;

        return to_route('question_answers', ['question' => $question->id]);

    }
}
