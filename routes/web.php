<?php

use Illuminate\Support\Facades\Route;

Route::get("login","\App\Http\Controllers\UserController@login")->name('login');
Route::post("login","\App\Http\Controllers\UserController@loginCheck")->name('login');
Route::get("logout","\App\Http\Controllers\UserController@logout")->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::resource("user","\App\Http\Controllers\UserController");
    Route::resource("AccEntries","\App\Http\Controllers\EntriesController");
});

Route::get('/',"\App\Http\Controllers\UserController@home")->name('home');
