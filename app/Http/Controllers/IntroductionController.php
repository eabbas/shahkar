<?php

namespace App\Http\Controllers;

use App\Models\introduction;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntroductionController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        $intro = introduction::first();
        return view('admin.settings.introduction.create', ['logo' => $logo, 'intro' => $intro]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'video' => ['required', 'file', 'mimes:mp4,mov,webm,mkv', 'max:20480'],
                'firstBoxText' => ['required'],
                'firstBoxNumber' => ['required'],
                'secondBoxText' => ['required'],
                'secondBoxNumber' => ['required'],
                'thirdBoxText' => ['required'],
                'thirdBoxNumber' => ['required'],
            ],
            [
                'video.required' => 'پر کردن این فیلد الزامی است.',
                'video.mimes' => 'فرمت فایل باید mp4 یا mov یا webm یا mkv باشد .',
                'video.max' => 'حجم فایل نباید بیشتر از 20 مگابایت باشد.',
                'firstBoxText.required' => 'پر کردن این فیلد الزامی است.',
                'firstBoxNumber.required' => 'پر کردن این فیلد الزامی است.',
                'secondBoxText.required' => 'پر کردن این فیلد الزامی است.',
                'secondBoxNumber.required' => 'پر کردن این فیلد الزامی است.',
                'thirdBoxText.required' => 'پر کردن این فیلد الزامی است.',
                'thirdBoxNumber.required' => 'پر کردن این فیلد الزامی است.',
            ]
        );
        $intro = introduction::first();
        if ($intro) {
            Storage::disk('public')->delete($intro->video);
            if ($intro->videoCover) {
                Storage::disk('public')->delete($intro->videoCover);
            }
            if ($intro->firstBoxIcon) {
                Storage::disk('public')->delete($intro->firstBoxIcon);
            }
            if ($intro->secondBoxIcon) {
                Storage::disk('public')->delete($intro->secondBoxIcon);
            }
            if ($intro->thirdBoxIcon) {
                Storage::disk('public')->delete($intro->thirdBoxIcon);
            }
        }
        $video_path = $request->video->store('introductionMedias', 'public');
        if (isset($request['videoCover'])) {
            $videoCover_path = $request->videoCover->store('introductionMedias', 'public');
        } else {
            $videoCover_path = null;
        }
        if (isset($request['firstBoxIcon'])) {
            $firstBoxIcon_path = $request->firstBoxIcon->store('introductionMedias', 'public');
        } else {
            $firstBoxIcon_path = null;
        }
        if (isset($request['secondBoxIcon'])) {
            $secondBoxIcon_path = $request->secondBoxIcon->store('introductionMedias', 'public');
        } else {
            $secondBoxIcon_path = null;
        }
        if (isset($request['thirdBoxIcon'])) {
            $thirdBoxIcon_path = $request->thirdBoxIcon->store('introductionMedias', 'public');
        } else {
            $thirdBoxIcon_path = null;
        }
        introduction::updateOrCreate(
            ['id' => 1],
            [
                'firstBoxText' => $request->firstBoxText,
                'firstBoxNumber' => $request->firstBoxNumber,
                'secondBoxText' => $request->secondBoxText,
                'secondBoxNumber' => $request->secondBoxNumber,
                'thirdBoxText' => $request->thirdBoxText,
                'thirdBoxNumber' => $request->thirdBoxNumber,
                'video' => $video_path,
                'videoCover' => $videoCover_path,
                'firstBoxIcon' => $firstBoxIcon_path,
                'secondBoxIcon' => $secondBoxIcon_path,
                'thirdBoxIcon' => $thirdBoxIcon_path,
            ]
        );
        return to_route('settings.introduction.create')->with('message', 'معرفی جدید برای سایت ایجاد شد.');
    }
}
