<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    //
    public function dashboard(){
        return view('user.dashboard');
    }
}
