<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function showedit(){
      return view('profile.editProfile');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function editData(Request $request){
      $request->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

       $imageName = time().'.'.$request->image->extension();

      $request->image->move(public_path('img'), $imageName);
      $user = Auth::user();
      $userId=$user->id;
      User::where('id',$userId)->update([
      'name'=>$request->nameedit,
      'password'=>Hash::make($request->passedit),
      'phone'=>$request->phoneedit,
      'gender'=>$request->genderedit,
      'avatar'=>$imageName
    ]);
     Profile::where('user_id',$userId)->update([
      'bio'=>$request->bioedit,
       'website'=>$request->websiteedit
     ]);
    return back()
        ->with('success','You have successfully edited your data.')
        ->with('image',$imageName);
    }

}
