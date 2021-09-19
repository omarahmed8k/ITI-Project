<?php

namespace App\Http\Controllers\Post;
use App\Models\Like;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function create(){
        return view('home');
    }


    public function store(Request $request){
        
        $like = new Like;
        $like->user_id=$request->input('userID');
        $like->post_id=$request->input('postID');

        
        $like ->save();

        return view('home');
    }
}
