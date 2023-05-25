<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.layouts.index');

    }

    public function contact()
    {
        return view('user.contact');

    }

    public function privacy()
    {
        return view('user.privacy');

    }
    public function term()
    {
        return view('user.term');

    }

    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.register');
    }
    public function error()
    {
      
        return view('404');
    }
}