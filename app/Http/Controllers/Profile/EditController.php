<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
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
      $user = Auth::user();
      $userId=$user->id;

       $imageName = time().'.'.$request->image->extension();


// code of creating user folders
      $folderName='user'.$userId;
      //File::makeDirectory("storage\app\public");
      $path = public_path($folderName);

    if(!File::isDirectory($path)){

        File::makeDirectory($path, 0777, true, true);

    }
// code of creating user folders


// code of creating user folders
    $request->image->move(public_path($folderName), $imageName);
      //$request->file->store($folderName, 'public');
      // $product = new User([
      //           "name" => $request->get('name'),
      //           "file_path" => $request->image->hashName()
      //       ]);
      //       $product->save();

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
