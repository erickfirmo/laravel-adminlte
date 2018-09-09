<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;


class UserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user = Auth::user();
        return view('admin.home.perfil.edit')
            ->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        dd($request->all());
    }


    public function matchpassword(Request $request, User $user)
    {

        $result = true;

        if(!Hash::check($request->password,Auth::user()->password))
        {
            $result = false;
        }
        
        return response()->json($result);
        
    }

}
