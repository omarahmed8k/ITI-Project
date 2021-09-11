<?php

use Illuminate\Support\Facades\Route;

// Home

Route::get('/', function () {
    return view('home');
})->middleware('auth');

// --------------

// Tags

Route::get('/tags', function () {
    return view('tags');
})->middleware('auth');

// --------------

// Profile

Route::get('/profile', function () {
    return view('profile.viewProfile');
})->middleware('auth');

Route::get('/edit', function () {
    return view('profile.editProfile');
})->middleware('auth');

Route::get('/followers', function () {
    return view('profile.followersPage');
})->middleware('auth');

Route::get('/following', function () {
    return view('profile.followingPage');
})->middleware('auth');

// --------------

// Post

Route::get('/add', function () {
    return view('post.addPost');
})->middleware('auth');

Route::get('/post', function () {
    return view('post.viewPost');
})->middleware('auth');


// --------------

// Auth (Register - Login - Forget Password)

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --------------
