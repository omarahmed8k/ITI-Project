<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;
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
        $likes=Like::all();
        $comments = Comment::all();




        foreach ($posts as $post) {
            if (isset($post->user->avatar)) {
                $post->user->avatar = 'user' . $post->user->id . '/' . $post->user->avatar;
            } else {
                $post->user->avatar = '/img/user.png';
            }
        }



        return view('home', compact('posts', 'users', 'comments','likes'));

    }
}
