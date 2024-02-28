<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("login","\App\Http\Controllers\UserController@login")->name('login');
Route::post("login","\App\Http\Controllers\UserController@loginCheck")->name('login');
Route::get("logout","\App\Http\Controllers\UserController@logout")->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::resource("user","\App\Http\Controllers\UserController");
});

Route::get('/', function () { return view('welcome'); })->name('home');
