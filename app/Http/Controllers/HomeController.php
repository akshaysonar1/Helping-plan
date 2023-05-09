<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        if(Auth::user()->user_type=='1'){
   $users = Auth::user()->first();
         if(!empty($users)){
        return view('layouts.master');
            }else{
                return view('auth.login');
            }
            }else{
                return view('auth.login');
            }
        }

  

    //This function use For fetch data 
    public function HelpSwitch()
    {
        $data = User::where('user_type', '=', '0' )->get();
        return view('admin.helpswitch',compact('data'));
    }

    // This Funcion Use for activate and deactivate 
    public function UserStatus($data, User $user)
    {
        // dd('hieee');
            $user = User::find($data);
            if ($user->status == '1') {
                $user->status = '0';
            } else {
                $user->status = '1';
            }
            $user->save();
            return redirect()->route('helpswitch')->with('success', 'User Updated');
      
    }

}
