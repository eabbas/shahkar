<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FooterColumnController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFormsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;
use Illuminate\Support\Facades\Route;

// category routes
Route::group(['prefix' => 'category', 'controller' => CategoryController::class, 'as' => 'category-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{category}', 'adminShow')->name('adminShow');
    Route::get('/show/{category}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->name('show');
    Route::get('/edit/{category}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{category}', 'delete')->name('delete');
});
// product routes
Route::group(['prefix' => 'product', 'controller' => ProductController::class, 'as' => 'product-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{product}', 'adminShow')->name('adminShow');
    Route::get('/show/{product}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->name('show');
    Route::get('/edit/{product}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{product}', 'delete')->name('delete');
});
// course category routes
Route::group(['prefix' => 'courseCategory', 'controller' => CourseCategoryController::class, 'as' => 'courseCategory-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{courseCategory}', 'adminShow')->name('adminShow');
    Route::get('/show/{courseCategory}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->name('show');
    Route::get('/edit/{courseCategory}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{courseCategory}', 'delete')->name('delete');
});
// course routes
Route::group(['prefix' => 'course', 'controller' => CourseController::class, 'as' => 'course-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{course}', 'adminShow')->name('adminShow');
    Route::get('/show/{course}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->name('show');
    Route::get('/edit/{course}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{course}', 'delete')->name('delete');
});
// menu routes
Route::group(['prefix' => 'menu', 'controller' => MenuController::class, 'as' => 'menu-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{menu}', 'show')->name('show');
    Route::get('/edit/{menu}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{menu}', 'delete')->name('delete');
});
// user routes
Route::group([
    'prefix' => 'user',
    'controller' => userController::class,
    'as' => 'user.'
], function () {
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/check_user', 'checkUser')->name('checkUser');
    Route::get('/profile/{user?}', 'profile')->name('profile');
    Route::get('/edit/{user}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{user}', 'delete')->name('delete');
    Route::get('/logout{id?}', 'logout')->name('logout');
    Route::get('/index', 'index')->middleware(checkAdminMiddleware::class)->name('index');
});
// comments routes
Route::group([
    'prefix' => 'comment',
    'controller' => CommentController::class,
    'as' => 'comment.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{comment}', 'show')->name('show');
    Route::get('/edit/{comment}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{comment}', 'delete')->name('delete');
});
// questions routes
Route::group(['prefix' => 'question', 'controller' => QuestionController::class, 'as' => 'question-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{question}', 'show')->name('show');
    Route::get('/edit/{question}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{question}', 'delete')->name('delete');
});
// answers routes
Route::group(['prefix' => 'answer', 'controller' => AnswerController::class, 'as' => 'answer-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{answer}', 'show')->name('show');
    Route::get('/edit/{answer}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{answer}', 'delete')->name('delete');
});
// home routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/notAccess', 'notAccess')->name('notAccess');
Route::view('/loginAtFirst', 'loginAtFirst')->name('loginAtFirst');
Route::view('/dashboard', 'admin.app.dashboard')->middleware(checkAdminMiddleware::class)->name('dashboard');
// admin routes
Route::controller(userController::class)->prefix('admin')->group(function () {
    Route::get('/signupUser', 'adminSignup')->middleware(checkAdminMiddleware::class)->name('admin_create_user');
    // Route::post("/store","store") -> name("user_store");
    // Route::get("/loginUser","login") -> name("user_login");
    // Route::post("/check_login","checkLogin");
    Route::get('/profile/{id?}', 'profile')->middleware(checkAdminMiddleware::class);
    // Route::get("/index","index");
    // Route::get("/edit/{id}","edit");
    // Route::post("/update","update");
    // Route::get("/delete/{id}","delete");
});
// settings routes
Route::group([
    'prefix' => 'settings',
    'controller' => SettingsController::class,
    'as' => 'settings.',
    'middleware' => checkAdminMiddleware::class
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
// search routes
Route::group(['controller' => SearchController::class, 'as' => 'search-'], function () {
    Route::post('/search', 'search')->name('search');
    Route::get('/show/products/category/{category}', 'index')->name('cat-products');
});
// banners routes
Route::group(['prefix' => 'banners', 'controller' => BannersController::class, 'as' => 'banners-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'bannersCreate')->name('create');
    Route::get('/logo/create', 'logoCreate')->name('logo-create');
    Route::get('/bigBanner/create', 'bigBannerCreate')->name('bigBanner-create');
    Route::get('/tiles/create', 'tilesCreate')->name('tiles-create');
    Route::get('/bigTile/create', 'bigTileCreate')->name('bigTile-create');
    Route::get('/footerTile/create', 'footerTileCreate')->name('footerTile-create');
    Route::post('/upsert', 'upsert')->name('upsert');
});
// footer column and rows routes
Route::group(['prefix' => 'footer', 'controller' => FooterColumnController::class, 'as' => 'footer-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/update', 'update')->name('update');
    Route::get('/footerFormMedia/create', 'footerFormMediaCreate')->name('footerFormMedia-create');
    Route::post('/footerFormMedia/store', 'footerFormMediaStore')->name('footerFormMedia-store');
    Route::post('/footerFormMedia/update', 'footerFormMediaUpdate')->name('footerFormMedia-update');
});
// about us routes
Route::group(['prefix' => 'aboutus', 'controller' => AboutUsController::class, 'as' => 'aboutus-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/upsert', 'upsert')->name('upsert');
    Route::get('', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
});
// contact us routes
Route::group(['prefix' => 'contactus', 'controller' => ContactUsController::class, 'as' => 'contactus-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/usersContact/{user}', 'usersContact')->withoutMiddleware(checkAdminMiddleware::class)->name('usersContact-index');
    Route::get('/usersContact/edit/{contactUs}', 'usersContactEdit')->withoutMiddleware(checkAdminMiddleware::class)->name('usersContact-edit');
    Route::post('/usersContact/update', 'usersContactUpdate')->withoutMiddleware(checkAdminMiddleware::class)->name('usersContact-update');
    Route::get('/usersContact/delete/{contactUs}', 'usersContactDelete')->withoutMiddleware(checkAdminMiddleware::class)->name('usersContact-delete');
    Route::get('/create', 'create')->withoutMiddleware(checkAdminMiddleware::class)->name('create');
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/edit/{contactUs}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/show/{contactUs}', 'show')->name('show');
    Route::get('/list', 'index')->name('index');
    Route::get('/delete/{contactUs}', 'delete')->name('delete');
});
// home forms routes
Route::group(['prefix' => 'homeForm', 'controller' => HomeFormsController::class, 'as' => 'homeForm-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/edit/{homeForms}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/show/{homeForms}', 'show')->name('show');
    Route::get('/list', 'index')->name('index');
    Route::get('/delete/{homeForms}', 'delete')->name('delete');
});
