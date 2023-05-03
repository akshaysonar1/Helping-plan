<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DemoController extends Controller
{
    
    public function demo(){
      
        if(Auth::user()->user_type=='0'){
            $users = Auth::user()->first();
                  if(!empty($users)){
                 return view('demo');
                     }else{
                         return view('auth.login');
                     }
                     }else{
                         return view('auth.login');
                     }
       
    }
}
