<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\settings;
use App\Models\User;
use App\Models\course;
use App\Models\phoneCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function signup()
    {
        return view('user.user.signup');
    }

    public function adminSignup()
    {
        $logo = logo::first();
        return view('admin.user.signup', ['logo' => $logo]);
    }

    public function store(Request $request)
    {
        // $password = Hash::make($request->password);
        User::create([
            'name' => $request?->name,
            'family' => $request?->family,
            'phoneNumber' => $request->phoneNumber,
            'password' => $request->password,
        ]);
        return to_route('user.login');
    }

    public function login()
    {
        return view('user.user.login');
    }

    public function checkUser(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if (!$user) {
            return to_route('user.signup');
        }
        $user_password = Hash::check($request->password, $user->password);
        if (!$user_password) {
            // باید به کاربر بگیم رمز ورود اشتباه هست چطور بگیم؟؟؟؟//
            // اونو باید با جی اس چک کنیم بگیم
            return to_route('user.login');
        }
        Auth::login($user);
        return to_route('home');
    }

    public function profile($user = null)
    {
        if (!$user) {
            $user = Auth::user();
        }
        $courses = course::all();
        $products = product::all();
        $settings = settings::all();
        $cats = category::all();
        $logo = logo::first();
        $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        return view('user.user.profile', [
            'courses' => $courses,
            'products' => $products,
            'user' => $user,
            'settings' => $settings,
            'categories' => $cats,
            'logo' => $logo,
            'footerColumns' => $footer_columns,
            'footer_form_column' => $footer_form_column,
        ]);
    }

    public function edit(User $user)
    {
        // $settings = settings::all();
        // $cats = category::all();
        // $logo = logo::first();
        // $footer_columns = footer_column::whereIn('section_number', [1, 2, 3])->with('rows')->get();
        // $footer_form_column = footer_column::where('section_number', 4)->with('images')->with('texts')->first();
        return view('user.user.user_edit', [
            'user' => $user,
            // 'settings' => $settings,
            // 'categories' => $cats,
            // 'logo' => $logo,
            // 'footerColumns' => $footer_columns,
            // 'footer_form_column' => $footer_form_column,
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->family = $request->family;
        $user->phoneNumber = $request->phoneNumber;
        if ($request->password) {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        $user->save();
        return to_route('user.index');
    }

    public function delete(User $user)
    {
        $user->contactuss()->delete();
        $user->delete();
        return to_route('user.index');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('user.login');
    }

    public function index()
    {
        $users = User::all();
        $logo = logo::first();
        return view('admin.user.index', [
            'users' => $users,
            'logo' => $logo
        ]);
    }

    public function courses(User $user)
    {
        $courses = $user->load('userCourses.course');
        $userCourses = $courses->toArray();
        return view('course.userCourse.courses', ['userCourses' => $userCourses, 'user' => $user]);
    }

    public function send_code(Request $request)
    {
        $code = rand(1000, 10000);
        phoneCode::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
        $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
        $client = new \IPPanel\Client($apiKey);
        $patternValues = [
            'activation_code' => $code,
        ];
        $bulkID = $client->sendPattern(
            '7fvdx77gveizxqn',  // pattern code
            '+983000505',  // originator
            $request->phoneNumber,  // recipient
            $patternValues,  // pattern values
        );
        return response()->json('ok');
    }

    public function checkAuth(Request $request)
    {
        $data['validate'] = User::where('phoneNumber', $request->phoneNumber)->first();
        $data['checkCode'] = false;
        $phoneCode = phoneCode::where('phoneNumber', $request->phoneNumber)->first();
        if ($phoneCode->code == $request->code) {
            $data['checkCode'] = true;
        }
        return response()->json($data);
    }

    public function forgetPassword()
    {
        return view('user.user.forgetPassword');
    }

    public function setPassword(Request $request)
    {
        // dd($request->all());
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        // dd($user);
        return view('user.user.setPassword', ['user' => $user]);
    }

    public function savePassword(Request $request)
    {
        $user = User::find($request->user_id);
        $user->password = $request->password;
        $user->save();
        return to_route('user.login');
    }
}
