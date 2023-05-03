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
        // dd('hello');
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

    public function demo(){
        dd('akshsy');
        return view('demo');
    }
}
