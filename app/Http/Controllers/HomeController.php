<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User_follower;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all()->sortDesc();
        $users = User::all();
        $likes = Like::all();
        $comments = Comment::all();
        $followers = User_follower::all();


        foreach ($posts as $post) {
            if ($post->user->avatar == 'user.png') {
                $post->user->avatar = '/img/user.png';
            } else {
                $post->user->avatar = 'user' . $post->user->id . '/' . $post->user->avatar;
            }
        }


        return view('home', compact('posts', 'users', 'comments', 'likes', 'followers'));

    }
}
