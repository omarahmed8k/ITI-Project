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
        return view('profile.followingPage')->with('users',$users);
    }
}
