<?php
namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
class AddDataController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('profile.addProfileData');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('img'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        $user = Auth::user();
        $userId=$user->id;
        Profile::where('user_id',$userId)->delete();
         Profile::create([
           'user_id'=>$user->id,
           'bio'=>$request->bio,
           'website'=>$request->website,
         ]);
         User::where('id',$userId)->update([
           'avatar'=>$imageName
         ]);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showid()
    {
        $user = Auth::user();
        echo "user id is".$user->id;
    }

}
