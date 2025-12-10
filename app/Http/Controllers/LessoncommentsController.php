<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson;  
use App\Models\lessoncomments; 

class LessoncommentsController extends Controller
{
    public function create(lesson $lesson){
        return view("lesson.comments.create" , ["lesson" => $lesson]);
    }

    public function store(Request $request , lesson $lesson){
        $data = $request->all();
        $data ['lesson_id'] = $lesson -> id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        lessoncomments::create($data);
        return to_route('lessonComments_index', ['lesson' => $lesson->id]);
    }

    public function index(lesson $lesson){
        //! 1 یوزری که نظر داده هم در آینده بعد از تکمیل کد ها 
        //! 2تبدیل تاریخ کریتت ات به شمسی برای آوردن در ویو 
        $lessoncomments= $lesson->lessoncomments;
        return view("lesson.comments.index" ,["lesson" => $lesson , "lessoncomments" => $lessoncomments]);
    }

    public function edit(lesson $lesson ,lessoncomments $lessoncomments ){
        return view("lesson.comments.edit" , ["lesson"  => $lesson ,"lessoncomments" => $lessoncomments ]);
    }

    public function update(Request $request ,lessoncomments $lessoncomments ){
        $lessoncomments -> comment = $request->comment;
        $lessoncomments -> status = $request->has('status') ? 1 : 0;
        $lessoncomments -> save();
        return to_route('lessonComments_index', ['lesson' => $request ->lesson_id]);
    }

    public function delete(lesson $lesson ,lessoncomments $lessoncomments){
        $lessoncomments -> delete();
        return to_route('lessonComments_index', ['lesson' => $lesson->id]);
    }
}
