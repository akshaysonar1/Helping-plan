<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\admin\PinModel;
class DeshboardController extends Controller
{
    //
    public function dashboard(){
        if(!empty(Auth::user()->id)){
            
            if(!empty(Auth::user()->user_type)=='0'){
          
                return view('user.dashboard');
               
            }else
            {
                return redirect('user/login');
            }
           
        }else
        {
            return redirect('user/login');
        }
     
    }
}
