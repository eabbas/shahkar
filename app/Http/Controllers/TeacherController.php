<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\teacher;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function create()
    {
        return view("teacher.create");
    }
    public function store(Request $request)
    {
        $path = null;
        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension(); 
            $path = $file->storeAs('profile', $fileName, 'public');
        }

        $social_medias = $request->social_media ? json_encode($request->social_media) : null;
        teacher::create([
            'name' => $request->name,
            'profile_img' => $path,
            'bio' => $request->bio,
            'phone' => $request->phone,
            'expertise' => $request->expertise,
            'social_media' => $social_medias,
        ]);


    // //    dd($request->all());
    //     $name = $request->profile_img->getClientOriginalName();
    //     $path = $request->profile_img->storeAs('profile', $name, 'public');
    //     $social_medias = json_encode($request->social_media);
    //     teacher::insertGetId([
    //         'name' => $request->name,
    //         'profile_img' => $path,
    //         'bio' => $request->bio,
    //         'phone' => $request->phone,
    //         'expertise' => $request->expertise,
    //         'social_media' => $social_medias,
    //     ]);
        return redirect('/teacher/teachers');        
    }
    public function index()
    {
        $teachers = teacher::all();
        return view("teacher.index" , ['teachers'=>$teachers]);
    }

    public function show(teacher $teacher)
    {
        $teacher->social_media = json_decode($teacher->social_media);
        return view("teacher.single" , ['teacher'=>$teacher]);
    }

    public function edit(teacher $teacher)
    {
        $teacher->social_media = json_decode($teacher->social_media);
        return view('teacher.edit' , ['teacher'=>$teacher]);
    }

    public function update(Request $request , teacher $teacher)
    {
      
         if ($request->profile_img) {
            Storage::disk('public')->delete($teacher->profile_img);
            $file = $request->file('profile_img');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $profile_img_Path = $file->storeAs('profile', $fileName, 'public');
            $teacher->profile_img = $profile_img_Path;
        }
        $teacher->social_media ?json_encode($request->social_media):null;
        $teacher->name = $request->name;
        $teacher->bio = $request->bio;
        $teacher->expertise = $request->expertise;
        $teacher->phone = $request->phone;
        $teacher->name = $request->name;
        $teacher->save();
        return redirect('/teacher/teachers');
    }

    public function delete(teacher $teacher)
    {
        $teacher->delete();
        return redirect('/teacher/teachers');

    }

}


