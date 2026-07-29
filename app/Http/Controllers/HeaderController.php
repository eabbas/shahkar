<?php

namespace App\Http\Controllers;

use App\Models\header;
use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function create()
    {
        $header = header::first();
        $logo = logo::first();
        return view('admin.settings.header.create', ['header' => $header, 'logo' => $logo]);
    }
    public function store(Request $request)
    {
        // $titleArray = explode('|', $request['title']);
        // $result = $titleArray[0] . '<span class="text-yellow-500">' . $titleArray[1] . '</span>' . $titleArray[2];
        // dd($result);
        $validated = $request->validate(
            [
                'img' => ['required'],
                'mobileImg' => ['required'],
                'title' => ['required'],
                'subTitle' => ['required'],
                'rightBtnText' => ['required'],
                'rightBtnLink' => ['required'],
                'leftBtnText' => ['required'],
                'leftBtnLink' => ['required'],
            ],
            [
                'img.required' => 'پر کردن این فیلد الزامی است.',
                'mobileImg.required' => 'پر کردن این فیلد الزامی است.',
                'title.required' => 'پر کردن این فیلد الزامی است.',
                'subTitle.required' => 'پر کردن این فیلد الزامی است.',
                'rightBtnText.required' => 'پر کردن این فیلد الزامی است.',
                'rightBtnLink.required' => 'پر کردن این فیلد الزامی است.',
                'leftBtnText.required' => 'پر کردن این فیلد الزامی است.',
                'leftBtnLink.required' => 'پر کردن این فیلد الزامی است.',
            ]
        );
        if ($validated) {
            $header = header::first();
            if ($header) {
                Storage::disk('public')->delete($header->img);
                Storage::disk('public')->delete($header->mobileImg);
            }
            $img_path = $request->img->store('headerImgs', 'public');
            $mobileImg_path = $request->mobileImg->store('headerImgs', 'public');
            header::updateOrCreate(
                ['id' => 1],
                [
                    'img' => $img_path,
                    'mobileImg' => $mobileImg_path,
                    'title' => $request->title,
                    'subTitle' => $request->subTitle,
                    'rightBtnText' => $request->rightBtnText,
                    'rightBtnLink' => $request->rightBtnLink,
                    'leftBtnText' => $request->leftBtnText,
                    'leftBtnLink' => $request->leftBtnLink,
                ]
            );
            return to_route('settings.header.create')->with('message', 'هدر جدید برای سایت ایجاد شد.');
        }
    }
}
