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

Route::get('/', [App\Http\Controllers\Catalogue\ProductController::class, 'index'])->name('/');




//login routes
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');

//login register posts
Route::post('/register-post', [App\Http\Controllers\LoginController::class, 'registerPost'])->name('register-post');
Route::post('/login-post', [App\Http\Controllers\LoginController::class, 'loginPost'])->name('login-post');

//middleware routes
Route::middleware('auth')->group(function() {
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/order-form', [App\Http\Controllers\Sales\OrderController::class, 'placeOrder'])->name('order-form');
    Route::post('/save-order', [App\Http\Controllers\Sales\OrderController::class, 'saveOrder'])->name('save-order');
});
