<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
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
        $userId = '';
        if (!empty(Auth::user())) {
            $userId = Auth::user()->id;
            if (Auth::user()->user_type == '0' || Auth::user()->user_type == '2') {
                $users = transection::where('tran_status', '!=', '1')->where('split_status', '1')->where('user_id', Auth::user()->id)->get();
                // dd($users);
                $showusers = transection::where('tran_status', '=', '1')->where('user_id', Auth::user()->id)->get();
                $data = Provide_Help::where('users_id', '=', (Auth::user()->id))->first();
                $user = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('ammount_pendding', '>', 0)->where('user_id', '!=', (Auth::user()->id))->get();
                $conform = transection::join('users', 'users.id', '=', 'transections.user_id')->where('receiver_id', '=', Auth::user()->id)->where('image', '!=', null)->where('user_id', '!=', (Auth::user()->id))->get();
                $currentDate = Carbon::now();
                $popup = transection::where('tran_status', '!=','2')->where('user_id', Auth::user()->id)->get();
            
                return view('user.dashboard', compact('userId', 'currentDate', 'data', 'user', 'conform', 'users', 'showusers','popup'));
            } else {
                return redirect('user/login');
            }
        } else {
            return redirect('user/login');
        }

    }
}