<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class UserController extends Controller
{   
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('index','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = Auth::user();
       if ($request->file('avator')) {            
            $photo = $request->file('avator');
            $imageName = Auth::user()->id.'_'.Auth::user()->post.'_'.time() . '.' . $photo->getClientOriginalExtension();    
            $directory = 'photo/';
            $photo = Image::make($request->file('avator'))->resize(300, 300)->save($directory.$imageName);
            $imageUrl = $directory.$imageName;
            if(isset($user->avator)){
                if ($user->avator  != 'photo/user.jpg') {
                    unlink($user->avator);
                }
                      
            }
        }
        $user->name = $request->fName;
        $user->email = $request->email;
        if (isset($imageUrl)) {
            $user->avator = $imageUrl;
        }
        $user->save();
        return back()->with('message','Your Info Updated Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
                $allUser = User::all();
        //return $allUser;
        return view('admin.user.menageUsers',['allUser'=>$allUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updet_user($id)
    {
        $profile = user::find($id);
        return view('admin.user.updetUser',['profile'=>$profile]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updet_user_info(Request $request)
    {   
        $profile = user::find($request->id);

        $profile->name = $request->name;
        $profile->post = $request->post;
        $profile->save();
        return back()->with('message','User Imfo Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
