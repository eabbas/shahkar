<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});



Route::view('/home', 'home') -> name("home");
Route::view('/notAccess', 'notAccess') -> name("notAccess");
Route::view('/loginAtFirst', 'loginAtFirst') -> name("loginAtFirst");


Route::controller(userController::class)->prefix("user") -> group(function (){

    Route::get("/signup","signup")->name("user_signUp") ;
    Route::post("/store","store") -> name("user_store");

    Route::get("/login","login") -> name("user_login");
    Route::post("/check_user","checkUser") -> name("checkUser");
    Route::get("/profile/{id?}","profile") ->name("user_profile");
    Route::get("/edit/{user}","edit") ->name("user_edit");
    Route::post("/updata","updata") -> name("user_update");
    Route::get("/delete/{user}","delete") -> name("user_delete");
    Route::get("/logOut","logOut") -> name("user_logOtu");
    Route::get("/index","index") -> name("user_index");



});

Route::controller(userController::class)->prefix("admin") -> group(function (){

    Route::get("/signUpUser","signup")-> middleware(checkAdminMiddleware::class) ->name("admin_create_user") ;
    // Route::post("/store","store") -> name("user_store");

    // Route::get("/loginUser","login") -> name("user_login");
    // Route::post("/check_login","checkLogin");
    Route::get("/profile/{id?}","profile")-> middleware(checkAdminMiddleware::class);
    // Route::get("/index","index");
    // Route::get("/edit/{id}","edit");
    // Route::post("/updata","updata");
    // Route::get("/delete/{id}","delete");

});
