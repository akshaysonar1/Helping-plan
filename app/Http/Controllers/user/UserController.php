<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.layouts.index');
       
    }

    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }
}

