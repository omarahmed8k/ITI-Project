<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $id = Auth::id();
        $user = User::find($id);

        $profile = $user->profile;

        $followers = User::find($id)->followers;
        $followersCount = $followers->count();

        $following = User::find($id)->following;
        $followingCount = $following->count();

        $posts = User::find($id)->posts;
        $postsCount = $posts->count();

        if ($user->avatar == 'user.png') {
            $user->avatar = '/img/user.png';
        } else {

            $user->avatar = 'user' . $user->id . '/' . $user->avatar;
        }


        return view('profile.viewProfile', ['user' => $user, 'profile' => $profile, 'followersCount' => $followersCount, 'followingCount' => $followingCount, 'posts' => $posts, 'postsCount' => $postsCount]);
    }
}
