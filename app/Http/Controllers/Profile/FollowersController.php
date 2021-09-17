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
       $users = User::find($id)->followers;
        return view('profile.followersPage')->with('users',$users);
    }
}
