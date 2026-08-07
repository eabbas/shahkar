<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkAdminMiddleware;
use App\Http\Middleware\checklogin;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ServiceController;

// new version routes
// home routes
Route::group(['controller' => HomeController::class], function () {
    Route::get('/', 'index')->name('home');
});

// settings routes
Route::group([
    'prefix' => 'settings',
    'as' => 'settings.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::group([
        'prefix' => 'header',
        'controller' => HeaderController::class,
        'as' => 'header.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
    Route::group([
        'prefix' => 'logo',
        'controller' => LogoController::class,
        'as' => 'logo.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
    Route::group([
        'prefix' => 'service',
        'controller' => ServiceController::class,
        'as' => 'service.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/edit', 'edit')->name('edit');
        Route::post('/show', 'show')->name('show');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->missing(function () {
            return to_route('missing');
        })->name('delete');
    });
    Route::group([
        'prefix' => 'introduction',
        'controller' => IntroductionController::class,
        'as' => 'introduction.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
});

// category routes
Route::group([
    'prefix' => 'category',
    'controller' => CategoryController::class,
    'as' => 'category.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::post('/admin/show', 'adminShow')->name('adminShow');
    Route::post('/edit/', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{id}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/show/{category}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('show');


    // Route::post('/showSubCategories', 'showSubCats')->withoutMiddleware(checkAdminMiddleware::class)->name('showSubCats');
    Route::post('/admin/deleteAll', 'deleteAll')->name('deleteAll');
});

// product routes
Route::group([
    'prefix' => 'product',
    'controller' => ProductController::class,
    'as' => 'product.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::post('/edit/', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{id}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/show/{product}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');

    // Route::get('/admin/show/{product}', 'adminShow')->missing(function () {
    //     return to_route('missing');
    // })->name('adminShow');
    // Route::post('/admin/deleteAll', 'deleteAll')->name('deleteAll');
});

// user routes
Route::group([
    'prefix' => 'user',
    'controller' => userController::class,
    'as' => 'user.'
], function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/check_user', 'checkUser')->name('checkUser');
    Route::post('/validate', 'validate')->name('validate');
    Route::get('/forgetPassword', 'forgetPassword')->name('forgetPassword');
    Route::post('/sendCode', 'send_sms')->name('sendCode');
    Route::post('/sendSMS', 'send_code')->name('sendSMS');
    Route::post('/setPassword', 'setPassword')->name('setPassword');
    Route::post('/savePassword', 'savePassword')->name('savePassword');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/store', 'store')->name('store');
    Route::post('/adminStore', 'adminStore')->name('adminStore');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/signupUser', 'adminSignup')->middleware(checkAdminMiddleware::class)->name('admin_create_user');
    Route::get('/index', 'index')->middleware(checkAdminMiddleware::class)->name('index');
    Route::post('/edit', 'edit')->name('edit');
    Route::post('/profileEdit', 'profileEdit')->name('profileEdit');
    Route::post('/update', 'update')->name('update');
    Route::post('/updateProfile', 'updateProfile')->name('updateProfile');
    Route::get('/delete/{user}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/checkAuth', 'checkAuth')->name('checkAuth');
    Route::get('/profile/{user?}', 'profile')->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('profile');
    // Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});

Route::post('/removeActivationCode', [UserController::class, 'removeActivationCode'])->name('removeActivationCode');

// fallback and missing
Route::fallback([HomeController::class, 'pageNotFound'])->name('fallback');
Route::get('/missing', [HomeController::class, 'pageNotFound'])->name('missing');
