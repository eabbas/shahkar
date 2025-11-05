<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function signup()
    {
        return view("user.signup");
    }
    public function store(Request $request)
    {
        $password = Hash::make($request->password);
        User::create([
            "name" => $request?->name,
            "family" => $request?->family,
            "email" => $request->email,
            "password" => $password,
        ]);
        return to_route("user.login");
    }
    public function login()
    {
        return view("user.login");
    }
    public function checkUser(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if (!$user) {
            return to_route("user.signup");
        }
        $user_password = Hash::check($request->password, $user->password);
        if (!$user_password) {
            //باید به کاربر بگیم رمز ورود اشتباه هست چطور بگیم؟؟؟؟//
            // اونو باید با جی اس چک کنیم بگیم
            return to_route("user.login");
        }
        Auth::login($user);
        return to_route("home");
    }
    public function profile($user = null)
    {
        if (!Auth::check()) {
            return to_route("user.login");
        }
        if (!$user) {
            $user = Auth::user();
        }
        return view("user.profile", ["user" => $user]);
    }
    public function edit(User $user)
    {
        return view("user.user_edit", ["user" => $user]);
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
        return to_route("user.index");
    }
    public function delete(User $user)
    {
        $user->delete();
        return to_route("user.index");
    }
    public function logout()
    {
        Auth::logout();
        return to_route("user.login");
    }
    public function index()
    {
        $users = User::all();
        return view('user.index', ["users" => $users]);
    }
}
