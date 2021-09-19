<?php

namespace App\Http\Controllers\Post;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(){
        return view('home');
    }


    public function store(Request $request){
        
        $comment = new Comment;
        $comment->comment=$request->input('comment');
        $comment->user_id=$request->input('userID');
        $comment->post_id=$request->input('postID');
        $comment->save();

        
        $comment ->save();

        return view('home');
    }

}
