<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchPage(Request $request)
    {

        $user = Auth::user();
        $userId = $user->id;
        $userName = $user->username;
        $users = User::select('id', 'username', 'avatar')->where('username', 'LIKE', '%' . $request->searchbar . '%')->where('username', '<>', $userName)->get();
        foreach ($users as $user) {
            if ($user->avatar == 'user.png') {
                $user->avatar = '/img/user.png';
            } else {

                $user->avatar = 'user' . $user->id . '/' . $user->avatar;
            }
        }
        return view('search')->with('searchItem', $request->searchbar)->with('foundusers', $users);
    }

    public function searchShow(Request $request)
    {

    }

}
