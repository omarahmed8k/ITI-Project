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
                $likeflag=(Like::where('post_id', '=',$request->input('postID'))->exists())&&(Like::where('user_id', '=',$request->input('userID'))->exists());
                
                if (!($likeflag)) {
                $like->user_id=$request->input('userID');
                $like->post_id=$request->input('postID');
                $like ->save();
                return redirect()->route('home');
                }
                else {
                  $deletedlike= Like::where('post_id',$request->input('postID'))->where('user_id',$request->input('userID'))->delete();
                  return redirect()->route('home');
                }

    }
}
