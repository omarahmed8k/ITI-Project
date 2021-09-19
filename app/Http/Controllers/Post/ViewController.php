<?php

namespace App\Http\Controllers\Post;
use DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($id)
    {
        $posts = Post::all();
        $users = User::all();
        $likes=Like::all();
        $comments = Comment::all();
        $ids=$id;

        return view('post.viewPost', compact('posts', 'users', 'comments','likes','ids'));
    }
}
