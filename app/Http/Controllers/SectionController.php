<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = section::all();
        $logo = logo::first();
        return view('admin.settings.section.index', ['sections' => $sections, 'logo' => $logo]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required'],
                'title' => ['required']
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'title.required' => 'پر کردن این فیلد الزامی است.'
            ]
        );
        section::create($request->all());
        return to_route('settings.section.index')->with('message', 'سکشن جدید برای سایت ایجاد شد.');
    }
    public function delete($id)
    {
        $section = section::find($id);
        $name = '';
        if ($section) {
            $name = $section['name'];
            $section->delete();
        }
        return to_route('settings.section.index')->with('message', 'سکشن ' . $name . ' حذف شد.');
        // در آینده باید واسط هاشو هم پاک کنم حواسم باشه
    }
    public function edit(Request $request)
    {
        $section = section::find($request['id']);
        return response()->json($section);
    }
    public function update(Request $request)
    {
        $validated = $request->validate(
            [
                'editName' => ['required'],
                'editTitle' => ['required']
            ],
            [
                'editName.required' => 'پر کردن فیلد نام سکشن الزامی است.',
                'editTitle.required' => 'پر کردن فیلد عنوان سکشن الزامی است.'
            ]
        );
        $section = section::find($request['section_id']);
        $name = $section['name'];
        $section->name = $request->editName;
        $section->title = $request->editTitle;
        $section->description = $request->editDesc;
        $section->save();
        return to_route('settings.section.index')->with('message', 'سکشن ' . $name . ' به روزرسانی شد.');
    }
}
