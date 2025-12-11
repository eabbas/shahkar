<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson; 
use App\Models\lessonsuggestion; 

class lessonSuggestionController extends Controller
{
    public function create(lesson $lesson){
        return view("lesson.suggestion.create" , ["lesson" => $lesson]);
    }

    public function store(Request $request , lesson $lesson){
        $data = $request->all();
        $data ['lesson_id'] = $lesson -> id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        unset($data['_token']);
        lessonsuggestion::create($data);
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson , lessonsuggestion $lessonsuggestion){
        return view("lesson.suggestion.edit" , ["lesson" => $lesson , "Suggestion" => $lessonsuggestion]);
    }

    public function update(Request $request ,lessonsuggestion $lessonsuggestion){
        $lessonsuggestion -> Suggestion = $request -> Suggestion;
        $lessonsuggestion -> status = $request->has('status') ? 1 : 0;
        $lessonsuggestion -> save();
        
        $lesson = $lessonsuggestion -> lesson;
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function delete(lesson $lesson , lessonsuggestion $lessonsuggestion){
        $lessonsuggestion -> delete();
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    
}
