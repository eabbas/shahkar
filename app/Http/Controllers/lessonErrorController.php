<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson;
use App\Models\lessonerror;
use App\Models\lessonerrortitle;

class lessonErrorController extends Controller
{
    public function create(lesson $lesson)
    {
        $errortitles = lessonerrortitle::all();
        return view("lesson.error.create", ["lesson" => $lesson, "errortitles" => $errortitles]);
    }

    public function store(Request $request, lesson $lesson)
    {
        $data = $request->all();
        // dd($request -> errortype);
        $data['lesson_id'] = $lesson->id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        lessonerror::create($data);
        return to_route('lesson_errors', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson, lessonerror $lessonerror)
    {
        $errortitles = lessonerrortitle::all();
        return view("lesson.error.edit", ["lesson" => $lesson, "Error" => $lessonerror, "errortitles" => $errortitles]);
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
