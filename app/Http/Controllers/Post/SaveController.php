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
    $saveflag=(Saved_post::where('post_id', '=',$request->input('postID'))->exists())&&(Saved_post::where('user_id', '=',$request->input('userID'))->exists());
    if (!($saveflag)) {
      $saved->user_id=$request->input('userID');
      $saved->post_id=$request->input('postID');
      $saved ->save();
      return redirect()->route('home');
    }
    else {
      $deletedPost= Saved_post::where('post_id',$request->input('postID'))->where('user_id',$request->input('userID'))->delete();
      return redirect()->route('home');
    }


    }
}
