<?php

use App\Http\Controllers\CategoryController;
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
