<?php

namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\User_follower;
use Illuminate\Support\Facades\Auth;


class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $id = Auth::id();
        $followers = User::find($id)->followers;
        $user = User::findOrFail($id);


        foreach ($followers as $follower) {

            $checkUser = User::findOrFail($follower->id);

            if ($user->isFollowing($checkUser)) {

                $follower->relation = true;
            } else {

                $follower->relation = false;
            }

        }


        return view('profile.followersPage')->with('followers', $followers);
    }

    public function follow($id)
    {
        $follower= Auth::user();
        $user = User::find($id);
        $user->followers()->attach($follower);
        return redirect()->route('followers.index');

    }

    public function unfollow($id)
    {

        $follower =Auth::user();
        $user = User::find($id);
        $user->followers()->detach($follower);
        return redirect()->route('followers.index');
    }
}
