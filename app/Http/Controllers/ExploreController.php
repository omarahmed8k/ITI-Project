<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ExploreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function explore()
    {
        $posts = Post::all();

        return view('explore', compact('posts'));
    }
}
