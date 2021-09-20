<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

use App\Models\Post_tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $posts = Post::all();
        $users = User::all();
        $tags=Tag::all();
        $post_tags=Post_tag::all();
        $ids=$id;
        return view('tags', compact('posts', 'users','post_tags','ids','tags'));
    }
}
