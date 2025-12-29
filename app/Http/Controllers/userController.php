<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\footer_column;
use App\Models\logo;
use App\Models\settings;
use App\Models\User;
use App\Models\course;
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
            'email' => $request->email,
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
        $user = User::where('email', $request->email)->first();
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
        $user->email = $request->email;
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
}
