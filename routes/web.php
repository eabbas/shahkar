<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
// course category routes
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
