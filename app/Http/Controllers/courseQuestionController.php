<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursequestion;
use App\Models\lesson;

class courseQuestionController extends Controller
{
    public function create(lesson $lesson)
    {
        return view("lesson.question.create", ["lesson" => $lesson]);
    }

    public function store(Request $request, lesson $lesson)
    {
        $data = $request->all();
        $data['lesson_id'] = $lesson->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        coursequestion::create($data);
        return to_route('lesson_questions', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson, coursequestion $coursequestion)
    {
        return view("lesson.question.edit", ["lesson" => $lesson, "question" => $coursequestion]);
    }

    public function update(Request $request, coursequestion $coursequestion)
    {
        $coursequestion->question = $request->question;
        $coursequestion->status = $request->has('status') ? 1 : 0;
        $coursequestion->save();
        $lesson = $coursequestion->lesson;
        return to_route('lesson_questions', ['lesson' => $lesson->id]);
    }

    public function delete(lesson $lesson, coursequestion $coursequestion)
    {
        $coursequestion->delete();
        return to_route('lesson_questions', ['lesson' => $lesson->id]);
    }

    public function answers(coursequestion $coursequestion)
    {
        $answers = $coursequestion->answers;
        return view("lesson.answer.answers", ["question" => $coursequestion, "answers" => $answers]);
    }
}
