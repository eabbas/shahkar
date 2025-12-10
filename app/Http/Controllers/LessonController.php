<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\lesson;  
use App\Models\course;  
use App\Models\courseseason;  
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function lesson(){
        return view("lesson.lesson");
    }

    public function create(courseseason $season , course $course){
        $courses = course::all();
        $seasons = courseseason::all();
        return view("lesson.create" ,["courses" => $courses ,"seasons" => $seasons , "season" => $season,"course"  => $course]);
    }

    public function store(Request $request){
        $data = $request->all();
        $data['free'] = $request->has('free') ? 1 : 0;
        if ($request->hasFile('video')) {
            $originalName = $request -> video ->getClientOriginalName();
            $fileName = Str::uuid()."_".$originalName; 
            $type = $request -> video->getClientOriginalExtension();
            $filePath = $request -> video->storeAs($type, $fileName, 'public');
            $data["video_path"]=$filePath;
            $data["video_type"]=$type;
        }
        unset($data["_token"]);
        unset($data["video"]);
        $lesson_id = lesson::insertGetId($data);
        return to_route("lesson_show" ,["lesson" => $lesson_id]);
    }


    public function index(){
        $lessons = lesson :: all();
        return view("lesson.index" , ["lessons" => $lessons]);
    }

    public function delete(lesson $lesson){
        $lesson -> delete();
        $season = $lesson->season;
        $lessons = $season -> lessons;
        return view("lesson.index" , ["lessons" => $lessons]);
    }

    public function edit(lesson $lesson){
        $courses = course::all();
        $seasons = courseseason::all();
        return view("lesson.edit" ,["courses" => $courses , "lesson"  =>$lesson,"seasons" => $seasons]);
    }


    public function show(lesson $lesson){
        return view('lesson.single',["lesson" => $lesson]);
    }

    public function update(Request $request , lesson $lesson){
        $lesson -> course_id =$request ->course_id;
        $lesson -> title=$request ->title;
        $lesson ->description= $request ->description;
        $lesson -> price = $request ->price;
        $lesson -> season_id = $request ->season_id;
        $lesson ->free =$request ->free;
        $lesson ->order =$request ->order;
        $lesson ->duration =$request ->duration;

        if($request->hasFile("video")){
            if(Storage::disk('public')->exists($lesson->video_path)) {
                Storage::disk('public')->delete($lesson->video_path);
            }
            $originalName = $request->video->getClientOriginalName();
            $fileName = Str::uuid()."_".$originalName;
            $type = $request->video->getClientOriginalExtension();
            $filePath = $request->video->storeAs($type, $fileName, 'public');
            $lesson->video_path = $filePath;
            $lesson->video_type = $type;
        }
       
        $lesson -> save();
        return to_route("lesson_show" ,[$lesson]);
    }

    public function attachfile(lesson $lesson){
        return view("lesson.attachments.create" , ["lesson" => $lesson]);
    }

    public function errors(lesson $lesson){
        // $errors = $lesson->load('errors');
        $lessoErrors = $lesson->errors;    
        
        return view("lesson.error.index",["lessoErrors" => $lessoErrors , "lesson" => $lesson]);
    }

    public function suggestions(lesson $lesson){
        $suggestions = $lesson->suggestions;
        return view("lesson.suggestion.index",["suggestions" => $suggestions , "lesson" => $lesson]);
    }

    public function questions(lesson $lesson){
        $questions = $lesson->questions;
        return view("lesson.question.index",["questions" => $questions , "lesson" => $lesson]);
    }

    public function showLessonAttachments(lesson $lesson){
        $attachments = $lesson -> attachments ;
        return view("lesson.attachments.index",["lesson" => $lesson , "attachments" => $attachments]);
    }


    
}

