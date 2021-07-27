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

Route::get('/hai', function () {
    return view('layouts.dashboard');
});

Route::get('/', function () {
    return view('Login.login');
});

Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');
//Route::resource('/account', 'AccountController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');