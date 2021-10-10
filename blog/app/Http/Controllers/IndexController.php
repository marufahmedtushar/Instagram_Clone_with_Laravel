<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index')->with('users',$users);
    }
    public function profile()
    {
        $users = User::all();
        return view('profile')->with('users',$users);
    }
    public function profileedit(Request $request)
    {
        
        $users = User::all();
        return view('editprofile')->with('users',$users);
    }

    public function profileinfosave(Request $request,$id)
    {
        if($request->hasFile('profileimg'))
        {
            //get file name  with the  extension
            $filenameWithExt = $request->file('profileimg')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('profileimg')->getClientOriginalExtension();
            //file name to  store
            $profileimgNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('profileimg')->storeAs('public/cover_images',$profileimgNameToStore);


        }
        

       
        $profileinfo = User::find($id);
        $profileinfo->name = $request->input('name');
        $profileinfo->username = $request->input('username');
        $profileinfo->website = $request->input('website');
        $profileinfo->bio = $request->input('bio');
        $profileinfo->email = $request->input('email');
        $profileinfo->phone_number = $request->input('phone_number');
        $profileinfo->gender = $request->input('gender');
        if($request->hasFile('profileimg')){
            $profileinfo->profileimg = $profileimgNameToStore;
        }
        $profileinfo->save();
        return back()->with('status','Information Updated..');
    }


}
