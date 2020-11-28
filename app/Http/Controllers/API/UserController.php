<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $user = Auth::user();
        $user_info = Auth::user()->user_info;
        return $user;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user_info = UserInfo::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|max:10',
            'user_info.full_name' => 'required|string|max:255',
            'user_info.country' => 'required|string|max:255',
            'user_info.zip_code' => 'required|integer|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'user_name' => 'required|unique:users,user_name,'.$user->id,
        ]);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "user_name" => $request->user_name,
        ]);
        $user_info->update([
            "address" => $request->user_info['address'],
            "full_name" => $request->user_info['full_name'],
            "city" => $request->user_info['city'],
            "country" => $request->user_info['country'],
            "zip_code" => $request->user_info['zip_code'],
            
        ]);
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
