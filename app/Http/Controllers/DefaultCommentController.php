<?php

namespace App\Http\Controllers;

use App\Models\defaultComment;
use App\Models\logo;
use Illuminate\Http\Request;

class DefaultCommentController extends Controller
{
    public function create()
    {
        $logo = logo::first();
        $comments = defaultComment::all();
        return view('admin.settings.defaultComments.create', ['logo' => $logo, 'defaultComments' => $comments]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'userNames.*'  => ['required'],
                'comments.*'   => ['required', 'max:255'],
            ],
            [
                'userNames.*.required'  => 'همه نام‌ها باید مقدار داشته باشند.',
                'comments.*.required'   => 'همه نظرات باید مقدار داشته باشند.',
                'comments.*.max'   => 'متن نظرات نباید بیشتر از 255 کاراکتر باشد.',
            ]
        );
        defaultComment::query()->delete();
        foreach ($request['userNames'] as $index => $userName) {
            defaultComment::create([
                'userName' => $userName,
                'comment' => $request['comments'][$index]
            ]);
        }
        return redirect()->back()->with('message', 'کامنت ها به روز رسانی شدند');
    }
}
