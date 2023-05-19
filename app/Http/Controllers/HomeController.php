<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

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
        return view('layouts.master');
    }

    //This function use For fetch data 
    public function HelpSwitch()
    {
        try {
            $data = User::where('user_type', '=', '0')->get();
            return view('admin.helpswitch', compact('data'));
        } catch (exception $e) {
            return view('404');
        }
    }

    // This Funcion Use for activate and deactivate 
    public function UserStatus($data, User $user)
    {
        try {
            $user = User::find($data);
            if ($user->status == '1') {
                $user->status = '0';
            } else {
                $user->status = '1';
            }
            $user->save();
            return redirect()->route('helpswitch')->with('success', 'User Updated');
        } catch (exception $e) {
            return view('404');
        }

    }

}