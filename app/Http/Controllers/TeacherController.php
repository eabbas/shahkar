<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\teacher;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        return view("admin.courseTeacher.create", ['logo' => $logo]);
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
        return to_route('teacher.list');
    }
    public function index()
    {
        $teachers = teacher::all();
        $logo = logo::first();
        return view("admin.courseTeacher.index", [
            'teachers' => $teachers,
            'logo' => $logo
        ]);
    }

    public function show(teacher $teacher)
    {
        $logo = logo::first();
        $teacher->social_media = json_decode($teacher->social_media);
        return view("admin.courseTeacher.single", [
            'teacher' => $teacher,
            'logo' => $logo
        ]);
    }

    public function edit(teacher $teacher)
    {
        $teacher['social_media'] = json_decode($teacher->social_media);
        $logo = logo::first();
        return view('admin.courseTeacher.edit', [
            'teacher' => $teacher,
            'logo' => $logo
        ]);
    }

    public function update(Request $request, teacher $teacher)
    {
        if ($request->profile_img) {
            if ($teacher->profile_img) {
                Storage::disk('public')->delete($teacher->profile_img);
            }
            $file = $request->file('profile_img');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $profile_img_Path = $file->storeAs('profile', $fileName, 'public');
            $teacher->profile_img = $profile_img_Path;
        }
        $teacher->social_media ? json_encode($request->social_media) : null;
        $teacher->name = $request->name;
        $teacher->bio = $request->bio;
        $teacher->expertise = $request->expertise;
        $teacher->phone = $request->phone;
        $teacher->name = $request->name;
        $teacher->save();
        return to_route('teacher.list');
    }

    public function delete(teacher $teacher)
    {
        $teacher->delete();
        return to_route('teacher.list');
    }
}
