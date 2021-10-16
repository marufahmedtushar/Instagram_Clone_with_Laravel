<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        return view('index')->with('users',$users)->with('posts',$posts);
    }
    public function profile()
    {
        $users = User::all();
        $posts = Post::all();
        return view('profile')->with('users',$users)->with('posts',$posts);
    }
    public function profileedit(Request $request)
    {
        
        $users = User::all();
        return view('editprofile')->with('users',$users);
    }


    public function profilepicupdate(Request $request,$id)
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
        if($request->hasFile('profileimg')){
            $profileinfo->profileimg = $profileimgNameToStore;
        }
        $profileinfo->save();
        return back()->with('status','Pofile Picture Updated..');
    }

    public function profileinfosave(Request $request,$id)
    {
    
        $profileinfo = User::find($id);
        $profileinfo->name = $request->input('name');
        $profileinfo->username = $request->input('username');
        $profileinfo->website = $request->input('website');
        $profileinfo->bio = $request->input('bio');
        $profileinfo->email = $request->input('email');
        $profileinfo->phone_number = $request->input('phone_number');
        $profileinfo->gender = $request->input('gender');
        $profileinfo->save();
        return back()->with('status','Information Updated..');
    }


    public function postcreate(Request $request){

        $this->validate($request,[
            'post_title' => 'required',
            'post_image' => 'image|nullable|max:1999',
        ]);

        //file upload
        //file upload
        if($request->hasFile('post_image')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('post_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('post_image')->getClientOriginalExtension();
            //file name to  store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('post_image')->storeAs('public/cover_images',$fileNameToStore);

        }


        $post = new Post();
        $post-> user_id = Auth::id();
        $post->post_title = $request->input('post_title');
        $post->post_image = $fileNameToStore;
        $post->save();
        return back()->with('status','post created');
    }


}
