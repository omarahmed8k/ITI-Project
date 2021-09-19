<?php

namespace App\Http\Controllers\Post;
use App\Models\Like;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function create(){
        return route('home');
    }


    public function store(Request $request){
        
        $like = new Like;
        if(!(Like::where('post_id', '=',$request->input('postID'))->exists()))
        {

                $like->user_id=$request->input('userID');
                $like->post_id=$request->input('postID');

                
                $like ->save();
                return redirect()->route('home');

        }
        else {
          $deletedPost= Like::where('post_id',$request->input('postID'))->delete();
          return redirect()->route('home');
        }


    }
}
