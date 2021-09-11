<?php
use Illuminate\Support\Facades\Route;

// Home

Route::get('/', function () {
    return view('home');
});

// --------------

// Tags

Route::get('/tags', function () {
    return view('tags');
});

// --------------

// Profile

Route::get('/profile', function () {
    return view('profile.viewProfile');
});

Route::get('/edit', function () {
    return view('profile.editProfile');
});

Route::get('/followers', function () {
    return view('profile.followersPage');
});

Route::get('/following', function () {
    return view('profile.followingPage');
});

// --------------

// Post

Route::get('/add', function () {
    return view('post.addPost');
});

Route::get('/post', function () {
    return view('post.viewPost');
});

// --------------

// Auth (Register - Login - Forget Password)

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --------------