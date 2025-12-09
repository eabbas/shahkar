<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\userpayments;
use App\Models\userCourse;

class UserpaymentsController extends Controller
{
    public function buyCourse(Request $request, course $course)
    {
        // in method baray pardkht marbot beh doreh hast 
        $meta = 6;
        /** متا کی مربوط به دوره ها  در آینده با تنضیمات داینامیک میکنیم  */

        if (userpayments::where('user_id', auth()->id())->where('value', $course->id)->where("meta_id", 6)->first()) {
            return "شما قبلاً دوره را خریده‌اید";
        }

        $payment = userpayments::create([
            "user_id" => auth()->id(),
            "payment" => $course->price,
            "meta_id" => $meta,
            "value" => $course->id,
            "status" => 1
        ]);

        if ($payment) {
            userCourse::create(
                [
                    "user_id" => auth()->id(),
                    "course_id" => $course->id,
                    "status" => "1"
                ]
            );
        }

        return to_route("user.courses", ["user" => auth()->id()]);
    }
}
