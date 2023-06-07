<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
use App\Models\admin\NoteModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin\PinModel;
use App\Models\Provide_Help;
use App\Models\user_payment;
use App\Models\transection;
use Auth;
use Exception;
use Carbon\Carbon;





class DeshboardController extends Controller
{
    public function dashboard()
    {
        
        $noteData = NoteModel::first();
       
        $userId = '';
        if (!empty(Auth::user())) {
            $userId = Auth::user()->id;
            if (Auth::user()->user_type == '0' || Auth::user()->user_type == '2') {
                $users = transection::where('tran_status', '!=', '1')->where('split_status', '1')->where('user_id', Auth::user()->id)->get();
                
                 $showusers = transection::where('tran_status', '=', '1')->where('user_id', Auth::user()->id)->get();
                  
                $data = Provide_Help::where('users_id', '=', (Auth::user()->id))->first();
             
                $user = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('ammount_pendding', '>', 0)->where('user_id', '!=', (Auth::user()->id))->get();
                // dd($users);
                $conform = transection::join('users', 'users.id', '=', 'transections.user_id')->where('receiver_id', '=', Auth::user()->id)->where('user_id', '!=', (Auth::user()->id))->get();
                $currentDate = Carbon::now();
                $popup = transection::where('tran_status', '!=','2')->where('user_id', Auth::user()->id)->get();
                $congoPopUp = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('pay_status','0')->where('user_id', Auth::user()->id)->where('user_payments.unique_id','=', Auth::user()->unique_pin)->first();
                  // for open congratulation pop up
                $pindeatils= Provide_Help::join('users', 'users.id', '=', 'provide__helps.users_id')->where('users_id', Auth::user()->id)->first();
               
                return view('user.dashboard', compact('userId', 'currentDate', 'data', 'user', 'conform', 'users', 'showusers','popup','noteData','congoPopUp','pindeatils'));
                 
            } else {
                return redirect('user/login');
            }
        } else {
            return redirect('user/login');
        }

    }
}