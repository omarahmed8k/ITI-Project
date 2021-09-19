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
      //$users= User::all();
      $user = Auth::user();
      $userId=$user->id;
      $users= User::select('id','username', 'avatar')->where('username', 'LIKE', '%'.$request->searchbar.'%')->get();
      $counts=count($users);
      return view('search')->with('searchItem',$request->searchbar)->with('foundusers',$users)->with('usercount',$counts);
    }

    public function searchShow(Request $request)
    {

    }

}
