<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegistrationForm()
    {
        return view('customer.auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['required','image']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_name' =>$data['user_name'],
            'role_id'=> 3,
        ]);
        if ($data['avatar']) {
            $img_extension = pathinfo($data['avatar']->getClientOriginalName(), PATHINFO_EXTENSION);
            $img_name = time().'_'.uniqid().'.'.$img_extension;
            \Image::make($data['avatar'])->save(public_path('images/profile/').$img_name);
            $data['avatar'] = $img_name;
        };
        UserInfo::create([
            'user_id' => $user->id,
            'full_name' => $data['full_name'],
            'phone_no' => $data['phone_no'],
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'zip_code' => $data['zip_code'],
            'avatar' => $data['avatar'],
            // 'dr_specialization' => $data['dr_specialization'],
            // 'bio' => $data['bio'],
            // 'chamber_addr' => $data['chamber_addr'],
            // 'job' => $data['job'],
            // 'service_area' => $data['service_area'],
        ]);
        
        return $user;
        // $extension = pathinfo($data['avatar']->getClientOriginalName(), PATHINFO_EXTENSION);
        // $name = time().'|'.uniqid().'.'.$extension;
        // dd($name);
    }
}
