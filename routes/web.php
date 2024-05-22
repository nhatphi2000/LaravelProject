<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\ProductController;

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

Route::get('admin/users/login',[LoginController::class,'index']);
Route::post('/admin/users/login/store',[LoginController::class,'store']);
Route::get('/about',[PageController::class,'about']);

Route::get('/contact', [PageController::class, 'showContactForm']);
Route::post('/contact', [PageController::class, 'submitContactForm']);

Route::get('/product', [ProductController::class,'showProduct'] )->name('product.index');
Route::get('/product/create', [ProductController::class,'createProduct'] );
Route::post('/product', [ProductController::class,'store'] )->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class,'update'])->name('product.update');

