<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/test', function () {
    return view('admin.test');
})->name('test')->middleware('auth','admin');

Route::resource('/admin/products/categories', App\Http\Controllers\CategoryController::class)->middleware('auth','admin');

Route::resource('/admin/products/products', App\Http\Controllers\ProductController::class)->middleware('auth','admin');

Route::resource('/admin/products/product-attributes', App\Http\Controllers\ProductAttributeController::class)->middleware('auth','admin');

Route::resource('/admin/products/image-galleries', App\Http\Controllers\ImageGalleryController::class)->middleware('auth','admin');