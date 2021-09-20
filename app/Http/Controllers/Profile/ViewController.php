<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $id = Auth::id();
        $user = User::findOrFail($id);

        $profile = $user->profile;

        $followers = User::findOrFail($id)->followers;
        $followersCount = $followers->count();

        $following = User::findOrFail($id)->following;
        $followingCount = $following->count();

        $posts = $user->posts;
        $postsNum = $posts->count();

        $saved_posts = $user->saved_posts;
//        dd($saved_posts);

        if ($user->avatar == 'user.png') {
            $user->avatar = '/img/user.png';
        } else {

            $user->avatar = 'user' . $user->id . '/' . $user->avatar;
        }

        return view('profile.viewProfile', ['postsNum' => $postsNum, 'posts' => $posts, 'user' => $user, 'profile' => $profile, 'followersCount' => $followersCount, 'followingCount' => $followingCount,'saved', 'saved_posts' => $saved_posts]);
    }

    public function profiles($id = null)
    {
        $user = User::findOrFail($id);

        $profile = $user->profile;

        $followers = $user->followers;
        $followersCount = $followers->count();

        $following = $user->following;
        $followingCount = $following->count();

        $posts = $user->posts;
        $postsNum = $posts->count();

        if ($user->avatar == 'user.png') {
            $user->avatar = '/img/user.png';
        } else {

            $user->avatar = 'user' . $user->id . '/' . $user->avatar;
        }

        return view('profile.viewProfile', ['user' => $user, 'profile' => $profile, 'followersCount' => $followersCount, 'followingCount' => $followingCount, 'postsNum' => $postsNum, 'posts' => $posts]);
    }
}
