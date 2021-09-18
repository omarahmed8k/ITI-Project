<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        $comments = Comment::all();

        return view('home', compact('posts', 'users', 'comments'));
    }
}
