<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\admin\PinModel;
use App\Models\Provide_Help;
use App\Models\user_payment;
class DeshboardController extends Controller
{
    //
    public function dashboard(){
        if(!empty(Auth::user()->id)){
            
            if(!empty(Auth::user()->user_type)=='0'){

                $data=Provide_Help::where('users_id', '=', (Auth::user()->id))->first();
                
                $user=user_payment::join('users','users.id','=' ,'user_payments.user_id')->where('ammount_pendding','>',0)->where('user_id', '!=', (Auth::user()->id))->get();
 
                return view('user.dashboard',compact('data','user'));
               
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
