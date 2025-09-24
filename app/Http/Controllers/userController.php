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
     
        if(Auth::check()){
            $user = Auth::user();
        }
        if(!Auth::check()){
            return to_route("user_login");
        }
        
        if($id){
            $user = User::find($id);
        }

        return view("user.profile",["user" => $user ]);
    }


    public function edit($user){
        return view("user.user_edit",["user" => $user ]);
    }


    public function updata(Request $request){
        $user = User::find($request -> id);
     
        $user -> name = $request -> name;
        $user -> family = $request -> family;
        $user -> email = $request -> email;

        if($request -> password){
            $password = Hash::make($request -> password);
            $user -> password = $password;
        }

        $user -> save();

        return redirect("user/profile");
    }

    public function delete($user){
       
        $user -> delete();
        return to_route("user_signUp");
    }

    public function logOut(){
        Auth::logout();

        return redirect("/user/login  ");
    }

    public function index(){
        $users = User::all();
        return view('user.index' , ["users" => $users]);
    }
}

