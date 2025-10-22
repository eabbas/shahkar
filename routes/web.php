<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductAttributesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QuestionController;


Route::view('/', 'welcome');
// category routes
Route::group(['prefix' => 'category', 'controller' => CategoryController::class, 'as' => 'category-'], function () {
   Route::get('/create', 'create');
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{category}', 'show')->name('show');
   Route::get('/edit/{category}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{category}', 'delete')->name('delete');
   Route::get('/{category}/products', 'products')->name('products');
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
// course category routes
Route::group(['prefix' => 'courseCategory', 'controller' => CourseCategoryController::class, 'as' => 'courseCategory-'], function () {
   Route::get('/create', 'create');
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
});
// menu routes
Route::group(['prefix' => 'menu', 'controller' => MenuController::class, 'as' => 'menu-'], function () {
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{menu}', 'show')->name('show');
    Route::get('/edit/{menu}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{menu}', 'delete')->name('delete');
});
// product attributes routes
Route::group(['prefix' => 'productAttribute', 'controller' => ProductAttributesController::class, 'as' => 'productAttribute-'], function () {
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{productAttribute}', 'show')->name('show');
    Route::get('/edit/{productAttribute}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{productAttribute}', 'delete')->name('delete');
});

Route::group([
    'prefix'=>"user",
    'controller'=>userController::class,
    'as'=>"user."
], function(){
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/check_user', 'checkUser')->name('checkUser');
    Route::get('/profile/{id?}', 'profile')->name('profile');
    Route::get('/edit/{user}', 'edit')->name('edit');
    Route::post('/updata', 'updata')->name('update');
    Route::get('/delete/{user}', 'delete')->name('delete');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/index', 'index')->name('index');
});

// Route::controller(userController::class)->prefix('admin')->group(function () {
//     Route::get('/signUpUser', 'signup')->middleware(checkAdminMiddleware::class)->name('admin_create_user');
//     // Route::post("/store","store") -> name("user_store");

//     // Route::get("/loginUser","login") -> name("user_login");
//     // Route::post("/check_login","checkLogin");
//     Route::get('/profile/{id?}', 'profile')->middleware(checkAdminMiddleware::class);
//     // Route::get("/index","index");
//     // Route::get("/edit/{id}","edit");
//     // Route::post("/updata","updata");
//     // Route::get("/delete/{id}","delete");
// });


Route::group([
    'prefix' => 'settings',
    'controller' => SettingsController::class,
    'as' => 'settings.'
], function () {
    Route::group([
        'prefix' => 'colors',
        'as' => 'colors.'
    ], function () {
        Route::get('/create', 'createColor')->name('createColor');
        Route::post('/update', 'upsertColor')->name('upsertColor');
        Route::get('/show', 'showColors')->name('showColors');
        Route::get('/delete', 'deleteColor')->name('deleteColor');
    });
});

Route::group([
    'prefix' => 'comment',
    'controller' => CommentController::class,
    'as' => 'comment.'
], function () {
    Route::post('/store', 'store')->name('store');
    Route::post('/update', 'update')->name('update');
    Route::post('/delete/{comment}', 'delete')->name('delete');
});
// questions routes
Route::group(['prefix' => 'question', 'controller' => QuestionController::class, 'as' => 'question-'], function () {
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{question}', 'show')->name('show');
   Route::get('/edit/{question}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{question}', 'delete')->name('delete');

});
// answers routes
Route::group(['prefix' => 'answer', 'controller' => AnswerController::class, 'as' => 'answer-'], function () {
   Route::post('/store', 'store')->name('store');
   Route::get('/list', 'index')->name('index');
   Route::get('/show/{answer}', 'show')->name('show');
   Route::get('/edit/{answer}', 'edit')->name('edit');
   Route::post('/update', 'update')->name('update');
   Route::get('/delete/{answer}', 'delete')->name('delete');
});
// user routes
Route::get('/home', [HomeController::class, 'index'])->name("home");
Route::view('/notAccess', 'notAccess')->name("notAccess");
Route::view('/loginAtFirst', 'loginAtFirst')->name("loginAtFirst");
// Route::controller(userController::class)->prefix("user")->group(function () {
//    Route::get("/signup", "signup")->name("user_signUp");
//    Route::post("/store", "store")->name("user_store");
//    Route::get("/login", "login")->name("user_login");
//    Route::post("/check_user", "checkUser")->name("checkUser");
//    Route::get("/profile/{id?}", "profile")->name("user_profile");
//    Route::get("/edit/{user}", "edit")->name("user_edit");
//    Route::post("/update", "update")->name("user_update");
//    Route::get("/delete/{user}", "delete")->name("user_delete");
//    Route::get("/logOut", "logOut")->name("user_logOut");
//    Route::get("/index", "index")->name("user_index");
// });
// admin routes
Route::controller(userController::class)->prefix("admin")->group(function () {
   Route::get("/signUpUser", "signup")->middleware(checkAdminMiddleware::class)->name("admin_create_user");
   // Route::post("/store","store") -> name("user_store");
   // Route::get("/loginUser","login") -> name("user_login");
   // Route::post("/check_login","checkLogin");
   Route::get("/profile/{id?}", "profile")->middleware(checkAdminMiddleware::class);
   // Route::get("/index","index");
   // Route::get("/edit/{id}","edit");
   // Route::post("/update","update");
   // Route::get("/delete/{id}","delete");
});

// settings routes
Route::group([
   'prefix' => 'settings',
   'controller' => SettingsController::class,
   'as' => 'settings.'
], function () {
   Route::group([
      'prefix' => 'colors',
      'as' => 'colors.'
   ], function () {
      Route::get('/create', 'createColor')->name('createColor');
      Route::post('/update', 'upsertColor')->name('upsertColor');
      Route::get('/show', 'showColors')->name('showColors');
      Route::get('/delete', 'deleteColor')->name('deleteColor');
   });

});
Route::get('/search', [SearchController::class, 'index']);

