<?php

namespace App\Http\Controllers\Post;
use App\Models\Saved_post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function create(){
        return view('home');
    }


    public function store(Request $request){
        
        $saved = new Saved_post;
        $saved->user_id=$request->input('userID');
        $saved->post_id=$request->input('postID');

        
        $saved ->save();

        return view('home');
    }
}
