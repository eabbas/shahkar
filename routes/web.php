<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;

Route::view('/', 'welcome');
// category routes
Route::group(['prefix' => 'category', 'controller' => CategoryController::class, 'as' => 'category-'], function () {
   Route::view('/create', 'category.create');
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{category}', 'show')->name('show');
   Route::get('/edit/{category}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{category}', 'delete')->name('delete');
});
// product routes
Route::group(['prefix' => 'product', 'controller' => ProductController::class, 'as' => 'product-'], function () {
   Route::get('/create', 'create');
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{product}', 'show')->name('show');
   Route::get('/edit/{product}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{product}', 'delete')->name('delete');
});
// course category
Route::group(['prefix' => 'courseCategory', 'controller' => CourseCategoryController::class, 'as' => 'courseCategory-'], function () {
   Route::view('/create', 'courseCategory.create');
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{courseCategory}', 'show')->name('show');
   Route::get('/edit/{courseCategory}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{courseCategory}', 'delete')->name('delete');
});
// course routes
Route::group(['prefix' => 'course', 'controller' => CourseController::class, 'as' => 'course-'], function () {
   Route::get('/create', 'create');
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{course}', 'show')->name('show');
   Route::get('/edit/{course}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{course}', 'delete')->name('delete');
=======



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
