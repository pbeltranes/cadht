<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UsersProfile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
 {
     return view('home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function save(Request $request)
     {
         $user_id = $request->input('id');
         $user_profile = UsersProfile::where("user_id", $user_id)->first();
         $user_profile->bio = $request->input('bio');
         $user_profile->birthdate = $request->input('birthdate');
         $user_profile->avatar_url = $request->input('avatar_url');
         $user_profile->save();
         return redirect()->action('UserController@profile', ['id' => $user_id]);

     }
     public function destroy($id)
     {
         $can_delete = Auth::user()->id == $id ? TRUE:FALSE;
         if($can_delete){
             $user = User::find($id);
             $user->delete();
         }

         return redirect('/');

     }
}
