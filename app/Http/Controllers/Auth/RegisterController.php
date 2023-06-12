<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Provide_Help;

use Exception;

use App\Models\transection;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            //  'mobile' => ['required', 'number', 'number', 'max:255', 'unique:users'],
            'mobile' => ['required', 'integer', 'digits:10', 'unique:users'],




            'password' => ['required', 'string', 'min:6', 'confirmed'],
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

      



        $user =  User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'customer_id' => $data['customer_id'],
            'user_type' => $data['user_type'],
            'state' => $data['state'],
            'city' => $data['city'],
            'pin_code' => $data['pin_code']
        ]);

        $providerHelp = new Provide_Help;
        $providerHelp->users_id = $user->id;
        $providerHelp->customer_id = $user->customer_id;
        $providerHelp->status = '0';
        $providerHelp->save();
        return $user;

    }
}