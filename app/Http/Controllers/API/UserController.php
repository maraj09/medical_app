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
        $user = auth('api')->user();
        $user_info = $user->info;
        $user_role = $user->role;
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

    public function update(Request $request, $id){

    }

    public function update_profile(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user_info = UserInfo::findOrFail($request->id);
        $this->validate($request,[
            'name' => 'required|string|max:10',
            'info.full_name' => 'required|string|max:255',
            'info.country' => 'required|string|max:255',
            'info.zip_code' => 'required|integer',
            'info.avatar' => '',
            'email' => 'required|email|unique:users,email,'.$request->id,
            'user_name' => 'required|unique:users,user_name,'.$request->id,
        ]);
        $current_avatar = $user_info->avatar;
        if ($request->info['avatar'] != $current_avatar) {
            $name = time().'.' . explode('/', explode(':', substr($request->info['avatar'], 0, strpos($request->info['avatar'], ';')))[1])[1];
            \Image::make($request->info['avatar'])->save(public_path('images/profile/').$name);
            $user_info->update([
                "avatar" =>$name,
            ]);
        $current_avatar = public_path('images/profile/').$current_avatar;
        if (file_exists($current_avatar)) {
            @unlink($current_avatar);
        }

        }
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "user_name" => $request->user_name,
        ]);
        $user_info->update([
            "address" => $request->info['address'],
            "full_name" => $request->info['full_name'],
            "city" => $request->info['city'],
            "country" => $request->info['country'],
            "zip_code" => $request->info['zip_code'],
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
