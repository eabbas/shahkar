<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson; 
use App\Models\lessonSuggestion; 

class courseSuggestionController extends Controller
{
    public function create(lesson $lesson){
        return view("lesson.suggestion.create" , ["lesson" => $lesson]);
    }

    public function store(Request $request , lesson $lesson){
        $data = $request->all();
        $data ['lesson_id'] = $lesson -> id;
        $data['user_id'] = auth()->id() ?? 0; // بهد از یوزز ها درست میکنیم
        lessonSuggestion::create($data);
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function edit(lesson $lesson , lessonSuggestion $lessonSuggestion){
        return view("lesson.suggestion.edit" , ["lesson" => $lesson , "Suggestion" => $lessonSuggestion]);
    }

    public function update(Request $request ,lessonSuggestion $lessonSuggestion){
        $lessonSuggestion -> Suggestion = $request -> Suggestion;
        $lessonSuggestion -> status = $request->has('status') ? 1 : 0;
        $lessonSuggestion -> save();
        
        $lesson = $lessonSuggestion -> lesson;
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    public function delete(lesson $lesson , lessonSuggestion $lessonSuggestion){
        $lessonSuggestion -> delete();
        return to_route('lesson_suggestions', ['lesson' => $lesson->id]);
    }

    
}
