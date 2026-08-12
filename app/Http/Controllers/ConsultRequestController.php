<?php

namespace App\Http\Controllers;

use App\Models\consultRequest;
use App\Models\logo;
use Illuminate\Http\Request;

class ConsultRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required'],
                'family' => ['required'],
                'phoneNumber' => ['required', 'min:11', 'max:11'],
                'email' => ['nullable', 'email'],
                'subject' => ['required'],
                'text' => ['required'],
            ],
            [
                'name.required' => 'پر کردن این فیلد الزامی است.',
                'family.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.required' => 'پر کردن این فیلد الزامی است.',
                'phoneNumber.min' => 'شماره تلفن باید 11 رقمی باشد',
                'phoneNumber.max' => 'شماره تلفن باید 11 رقمی باشد',
                'email.email' => 'ساختار ایمیل را رعایت کنید.',
                'subject.required' => 'پر کردن این فیلد الزامی است.',
                'text.required' => 'پر کردن این فیلد الزامی است.',
            ]
        );
        consultRequest::create([
            'name' => $request['name'],
            'family' => $request['family'],
            'phoneNumber' => $request['phoneNumber'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'text' => $request['text'],
            'is_completed' => 0
        ]);
        return redirect()->back()->with('success', 'درخواست شما ثبت شد همکاران ما در اسرع وقت با شما تماس خواهند گرفت.');
    }
    public function index()
    {
        $requests = consultRequest::all();
        $logo = logo::first();
        return view('admin.consultRequests.index', ['consultRequests' => $requests, 'logo' => $logo]);
    }
    public function update(Request $request)
    {
        $consultRequest = consultRequest::find($request['id']);
        if ($consultRequest->is_completed) {
            $consultRequest->is_completed = 0;
        } else {
            $consultRequest->is_completed = 1;
        }
        $result = $consultRequest->save();
        return response()->json($result);
    }
    public function delete($id)
    {
        $consultRequest = consultRequest::find($id);
        if ($consultRequest) {
            $subject = $consultRequest->subject;
            $consultRequest->delete();
        } else {
            return redirect()->back()->with('message', 'چنین درخواست مشاوره ای وجود ندارد.');
        }
        return redirect()->back()->with('message', 'درخواست مشاوره درمورد ' . $subject . ' حذف شد.');
    }
}
