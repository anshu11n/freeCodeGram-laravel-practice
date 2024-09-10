<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p', [App\Http\Controllers\PostsController::class, 'create']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');