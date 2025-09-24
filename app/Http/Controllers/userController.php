<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function signup(){
        return view("user.signup");
    }

    public function store(Request $request){

        $password = Hash::make($request -> password);
        User::create([
            "name" => $request -> name,
            "family" => $request -> family,
            "email" => $request -> email,
            "password" => $password,
        ]);
        return to_route("user_login");
    }

    public function login(){
        return view("user.login");
    }

    public function checkUser(Request $request){
        $user= User:: where("email",$request -> email) -> first();
        if(!$user){
            return to_route("user_login");
        }
        $user_password = Hash::check($request -> password , $user -> password);
        if(!$user_password){
            //باید به کاربر بگیم رمز ورود اشتباه هست چطور بگیم؟؟؟؟//
            return to_route("user_login");
        }
        if($user && $user_password){
            Auth::login($user);
        }else{
            return to_route("user_signUp");
        }
        return to_route("home");
    }


    public function profile($id =null){
        $user = Auth::user();
        $flag =false;
        if(!Auth::check()){
            return to_route("user_login");
        }
        if($user-> is_admin ==1){
            $flag = true;
        }
        if($id){
            $user = User::find($id);
        }

        return view("user.profile",["user" => $user,"flag" => $flag]);
    }
}

