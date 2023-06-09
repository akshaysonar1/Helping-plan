<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Exception;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;
  /**
   * Where to redirect users after login.
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


    $this->middleware('guest')->except('logout');


  }
  public function logout(Request $request)
  {
    
    if($request->user_type =='1'){
    Auth::logout();
    return redirect('/login');
    }
    else{
      Auth::logout();
    return redirect('/user/login');
    }
    // return view('user.login');
  }


  public function mobilelogin(Request $request)
  {
    
      $this->validate($request, [

        'mobile' => 'required',
        'password' => 'required',
      ]);

      $pass = $request->password;

      $user = User::where('mobile', $request->get('mobile'))->first();




      if ($user) {
        if ($request->get('mobile') != $user->mobile) {
          return redirect('user/login')->with('error', 'Please Register First Mobile Number!');
        }
      } else {

        return redirect('user/login')->with('error', 'The Mobile Numer is Not Registered');
      }
      if (!Hash::check($pass, $user->password)) {
        return redirect('user/login')->with('error', 'Password is Wrong');
      } else {


        if (Hash::check($pass, $user->password)) {
          \Auth::login($user);

          return redirect('user/dashboard');
        } else {
          return redirect('user/login')->with('error', 'The Mobile Numer is Not Registered');
        }
      }
   
  }

  protected function redirectTo()
  {
    try {

      if (Auth::user()->user_type == '1') {
        return '/home'; // admin dashboard path
      } else {

        return '/user/dashboard'; // member dashboard path
      }
    } catch (exception $e) {
      return view('404');
    }
  }
}