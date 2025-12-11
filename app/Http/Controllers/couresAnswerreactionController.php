<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseanswer;
use App\Models\courseanswerreaction;
use Illuminate\Support\Facades\Auth;

class couresAnswerreactionController extends Controller
{
    public function store(Request $request, courseanswer $courseanswer)
    {
        courseanswerreaction::updateOrCreate(
            [
                'user_id'   =>  Auth::id(),
                'courseanswer_id' => $courseanswer->id
            ],
            [
                'reaction'  => $request->reaction ?? 0
            ]
        );

        $question = $courseanswer->question;

        return to_route('question_answers', ['coursequestion' => $question->id]);
    }
}
