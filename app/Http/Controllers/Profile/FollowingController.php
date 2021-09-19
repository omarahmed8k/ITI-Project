<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $id = Auth::id();
        $users = User::find($id)->following;
        foreach ($users as $user){
            if (isset($user->avatar)) {
                $user->avatar = 'user' . $user->id . '/' . $user->avatar;

            } else {
                $user->avatar = '/img/user.png';
            }
        }
        return view('profile.followingPage')->with('users',$users);
    }

    public function unfollow($id)
    {

        $follower =Auth::user();
        $user = User::find($id);
        $user->followers()->detach($follower);
        return redirect()->route('following.index');
    }
}
