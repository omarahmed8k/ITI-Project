<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\CommentController;
use App\Http\Controllers\Post\LikeController;
use App\Http\Controllers\Post\SaveController;
use App\Http\Controllers\Profile\AddDataController;
use App\Http\Controllers\Profile\EditController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Profile\ViewController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

// --------------

// Tags

Route::get('/explore', [ExploreController::class, 'explore'])->middleware('auth');

Route::get('/tags', function () {
    return view('tags');
})->middleware('auth');

// --------------

// Profile

Route::get('/profile', 'App\Http\Controllers\Profile\ViewController@index')->middleware('auth')->name('profile.index');
Route::get('/edit', [EditController::class, 'showedit'])->name('edit.data.get')->middleware('auth');
Route::post('/edit', [EditController::class, 'editData'])->name('edit.data')->middleware('auth');
Route::get('/profile/{id}', [ViewController::class, 'profiles'])->middleware('auth');

//followers

Route::get('/followers', 'App\Http\Controllers\Profile\FollowersController@index')->middleware('auth')->name('followers.index');
Route::post('/follow/{id}', 'App\Http\Controllers\Profile\FollowersController@follow')->middleware('auth')->name('followers.follow');
Route::delete('/unfollow/{id}', 'App\Http\Controllers\Profile\FollowersController@unfollow')->middleware('auth')->name('followers.unfollow');

//=======

// Route::get('/search', [SearchController::class, 'searchPage'])->name('search.show');
Route::post('/search', [SearchController::class, 'searchPage'])->name('search.data');


//following

Route::get('/following', 'App\Http\Controllers\Profile\FollowingController@index')->middleware('auth')->name('following.index');
Route::delete('/unfollowFollowing/{id}', 'App\Http\Controllers\Profile\FollowingController@unfollow')->middleware('auth')->name('following.unfollow');

// --------------

// Post

Route::get('add-posts', [CreateController::class, 'create'])->middleware('auth');
Route::post('add-posts', [StoreController::class, 'store'])->middleware('auth');
Route::get('/post/{id}', 'App\Http\Controllers\Post\ViewController@index')->middleware('auth')->name('post');
//<<<<<<< HEAD

//comments
Route::get('add-comments', [CommentController::class, 'create'])->middleware('auth');
Route::post('add-comments', [CommentController::class, 'store'])->middleware('auth');
Route::get('add-comments2', [CommentController::class, 'create2'])->middleware('auth');
Route::post('add-comments2', [CommentController::class, 'store2'])->middleware('auth');

//likes
Route::get('add-likes', [LikeController::class, 'create'])->middleware('auth');
Route::post('add-likes', [LikeController::class, 'store'])->middleware('auth');
Route::get('add-likes2', [LikeController::class, 'create2'])->middleware('auth');
Route::post('add-likes2', [LikeController::class, 'store2'])->middleware('auth');

//save_posts
Route::get('save-post', [SaveController::class, 'create'])->middleware('auth');
Route::post('save-post', [SaveController::class, 'store'])->middleware('auth');
Route::get('save-post2', [SaveController::class, 'create2'])->middleware('auth');
Route::post('save-post2', [SaveController::class, 'store2'])->middleware('auth');


//=======
//>>>>>>> e615297c68ebcb23b9e1cb8e3bdb184df5832485
// --------------

// Auth (Register - Login - Forget Password)

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');


// --------------


// profile

// --------------
Route::get('/data', [AddDataController::class, 'imageUpload'])->name('image.upload');
Route::post('/data', [AddDataController::class, 'imageUploadPost'])->name('image.upload.post');
Route::get('/showid', [AddDataController::class, 'showid'])->name('show.id');
// --------------
