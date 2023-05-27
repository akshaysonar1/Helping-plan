<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;

class DemoController extends Controller
{

    public function demo()
    {
        try {

            if (Auth::user()->user_type == '0' || Auth::user()->user_type == '2') {
                $users = Auth::user()->first();
                if (!empty($users)) {
                    return view('user.dashboard');
                } else {
                    return view('auth.login');
                }
            } else {
                return view('auth.login');
            }
        } catch (exception $e) {
            return view('404');
        }

    }
}