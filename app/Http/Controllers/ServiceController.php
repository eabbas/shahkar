<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function create()
    {
        $services = service::all();
        $logo = logo::first();
        return view('admin.settings.service.index', ['logo' => $logo, 'services' => $services]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => ['required'],
                'img' => ['max:100'],
                'link' => ['required']
            ],
            [
                'title.required' => 'پر کردن این فیلد الزامی است.',
                'img.max' => 'حجم فایل نباید بیشتر از 100 کیلوبایت باشد.',
                'link.required' => 'پر کردن این فیلد الزامی است.'
            ]
        );
        $icon_path = null;
        $img_path = null;
        if (isset($request['img'])) {
            $img_path = $request->img->store('serviceImgs', 'public');
        }
        if (isset($request['icon'])) {
            $icon_path = $request->icon->store('serviceImgs', 'public');
        }
        service::create([
            'title' => $request->title,
            'subTitle' => $request->subTitle,
            'link' => $request->link,
            'icon' => $icon_path,
            'img' => $img_path,
        ]);
        return to_route('settings.service.create')->with('message', 'خدمات جدید برای سایت ایجاد شد.');
    }
    public function delete($id)
    {
        $service = service::find($id);
        if ($service) {
            if ($service['icon']) {
                Storage::disk('public')->delete($service['icon']);
            }
            if ($service['img']) {
                Storage::disk('public')->delete($service['img']);
            }
            $name = $service['title'];
            $service->delete();
        } else {
            return to_route('settings.service.create')->with('message', 'چنین سرویسی وجود ندارد.');
        }
        return to_route('settings.service.create')->with('message', 'سرویس ' . $name . ' حذف شد.');
    }
    public function show(Request $request)
    {
        $service = service::find($request['id']);
        if ($service->img) {
            $service->img = asset('storage/' . $service['img']);
        }
        if ($service->icon) {
            $service->icon = asset('storage/' . $service['icon']);
        }
        return response()->json($service);
    }
    public function edit(Request $request)
    {
        $service = service::find($request['id']);
        if ($service->img) {
            $service->img = asset('storage/' . $service['img']);
        }
        if ($service->icon) {
            $service->icon = asset('storage/' . $service['icon']);
        }
        return response()->json($service);
    }
    public function update(Request $request)
    {
        $validated = $request->validate(
            [
                'editTitle' => ['required'],
                'editImg' => ['max:100'],
                'editLink' => ['required']
            ],
            [
                'editTitle.required' => 'پر کردن فیلد عنوان الزامی است.',
                'editImg.max' => 'حجم فایل نباید بیشتر از 100 کیلوبایت باشد.',
                'editLink.required' => 'پر کردن فیلد لینک الزامی است.'
            ]
        );
        $service = service::find($request['service_id']);
        if (isset($request['removedImgs'])) {
            foreach ($request['removedImgs'] as $key => $removedImg) {
                Storage::disk('public')->delete($removedImg);
                $service = service::where($key, $removedImg)->first();
                $service->$key = null;
                $service->save();
            }
        }
        if (isset($request['editImg'])) {
            if ($service['img']) {
                Storage::disk('public')->delete($service['img']);
            }
            $img_path = $request->editImg->store('serviceImgs', 'public');
        } else {
            $img_path = $service['img'];
        }
        if (isset($request['editIcon'])) {
            if ($service['icon']) {
                Storage::disk('public')->delete($service['icon']);
            }
            $icon_path = $request->editIcon->store('serviceImgs', 'public');
        } else {
            $icon_path = $service['icon'];
        }
        $name = $service['title'];
        $service->title = $request->editTitle;
        $service->link = $request->editLink;
        $service->subTitle = $request->editSubTitle;
        $service->img = $img_path;
        $service->icon = $icon_path;
        $service->save();
        return to_route('settings.service.create')->with('message', 'سرویس ' . $name . ' به روزرسانی شد.');
    }
}
