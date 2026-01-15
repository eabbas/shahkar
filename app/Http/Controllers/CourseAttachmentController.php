<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseattachment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseAttachmentController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->file('files') as $file) {
            $originalName = $file->getClientOriginalName();
            $fileName = Str::uuid() . "_" . $originalName;
            $type = $file->getClientOriginalExtension();
            $filePath = $file->storeAs($type, $fileName, 'public');
            courseattachment::create([
                'lesson_id' => $request->lesson_id,
                'type' => $type,
                'file_path' => $filePath,
            ]);
        }
        return to_route("lesson_adminAttachments", ['lesson' => $request->lesson_id]);
    }

    public function update(Request $request, courseattachment $courseattachment)
    {

        if (Storage::disk('public')->exists($courseattachment->file_path)) {
            Storage::disk('public')->delete($courseattachment->file_path);
        }

        $originalName = $request->file->getClientOriginalName();
        $fileName = Str::uuid() . "_" . $originalName;
        $type = $request->file->getClientOriginalExtension();
        $filePath = $request->file->storeAs($type, $fileName, 'public');

        $courseattachment->type = $type;
        $courseattachment->file_path = $filePath;
        $courseattachment->save();
        $lesson = $courseattachment->lesson;
        return to_route("lesson_adminAttachments", ['lesson' => $lesson->id]);
    }

    public function delete(courseattachment $courseattachment)
    {
        if (Storage::disk('public')->exists($courseattachment->file_path)) {
            Storage::disk('public')->delete($courseattachment->file_path);
        }
        $courseattachment->delete();
        $lesson = $courseattachment->lesson;
        return to_route("lesson_adminAttachments", ['lesson' => $lesson->id]);
    }
}
