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
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductAttributesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
// category routes
Route::group(['prefix' => 'category', 'controller' => CategoryController::class, 'as' => 'category-'], function () {
    Route::get('/create', 'create')->name('create');
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
    Route::get('/create', 'create')->name('create');
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
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/index', 'index')->name('index')->middleware(checkAdminMiddleware::class);
});
// comments routes
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
// home routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/notAccess', 'notAccess')->name('notAccess');
Route::view('/loginAtFirst', 'loginAtFirst')->name('loginAtFirst');
// admin routes
Route::controller(userController::class)->prefix('admin')->group(function () {
    Route::get('/signupUser', 'signup')->middleware(checkAdminMiddleware::class)->name('admin_create_user');
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
// search routes
Route::get('/search/{category}', [SearchController::class, 'index'])->name('search');
// banners routes
Route::group(['prefix' => 'banners', 'controller' => BannersController::class, 'as' => 'banners-'], function () {
    Route::get('/create', 'bannersCreate')->name('create');
    Route::get('/logo/create', 'logoCreate')->name('logo-create');
    Route::get('/bigBanner/create', 'bigBannerCreate')->name('bigBanner-create');
    Route::get('/tiles/create', 'tilesCreate')->name('tiles-create');
    Route::get('/bigTile/create', 'bigTileCreate')->name('bigTile-create');
    Route::get('/footerTile/create', 'footerTileCreate')->name('footerTile-create');
    Route::post('/upsert', 'upsert')->name('upsert');
});
// dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(checkAdminMiddleware::class)->name('dashboard');

Route::view('dashboard/settings', 'dashboard.settings')->name('dashboard-settings');
Route::view('dashboard/settings/home', 'dashboard.home')->name('dashboard-settings-home');
Route::view('dashboard/settings/home/footer', 'dashboard.footerPartsLinks')->name('footer');
// footer column and rows routes
Route::group(['prefix' => 'footer', 'controller' => FooterColumnController::class, 'as' => 'footer-'], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/update', 'update')->name('update');
    Route::get('/footerFormMedia/create', 'footerFormMediaCreate')->name('footerFormMedia-create');
    Route::post('/footerFormMedia/store', 'footerFormMediaStore')->name('footerFormMedia-store');
    Route::post('/footerFormMedia/update', 'footerFormMediaUpdate')->name('footerFormMedia-update');
});
// about us routes
Route::group(['prefix' => 'aboutus', 'controller' => AboutUsController::class, 'as' => 'aboutus-'], function () {
    Route::get('/create', 'create')->middleware(checkAdminMiddleware::class)->name('create');
    Route::post('/upsert', 'upsert')->name('upsert');
    Route::get('', 'index')->name('index');
});
// contact us routes
Route::group(['prefix' => 'contactus', 'controller' => ContactUsController::class, 'as' => 'contactus-'], function () {
    Route::get('/create', 'create')->name('create');
    Route::get('/usersContact/{user}', 'usersContact')->name('usersContact');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{contactUs}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/show/{contactUs}', 'show')->name('show');
    Route::get('/list', 'index')->name('index');
    Route::get('/delete/{contactUs}', 'delete')->name('delete');
});
