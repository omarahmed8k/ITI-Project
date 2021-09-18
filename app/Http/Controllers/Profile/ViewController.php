<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $id = Auth::id();
        $user = User::find($id);

        $profile = $user->profile;

        $followers = User::find($id)->followers;
        $followersCount = $followers->count();

        $following = User::find($id)->following;
        $followingCount = $following->count();

        return view('profile.viewProfile', ['user' => $user, 'profile' => $profile, 'followersCount' => $followersCount, 'followingCount' => $followingCount]);
    }
}
