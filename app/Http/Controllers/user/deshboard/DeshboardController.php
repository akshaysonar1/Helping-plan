<?php

namespace App\Http\Controllers\user\deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\admin\PinModel;
use App\Models\Provide_Help;
use App\Models\user_payment;
use App\Models\transection;
use Exception;

class DeshboardController extends Controller
{
    //
    public function dashboard()
    {
        try {
            if (!empty(Auth::user()->id)) {

                if (!empty(Auth::user()->user_type) == '0') {

                    $admin = User::where('user_type', '=', '1')->get();

                    $data = Provide_Help::where('users_id', '=', (Auth::user()->id))->first();

                    $user = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('ammount_pendding', '>', 0)->where('user_id', '!=', (Auth::user()->id))->get();
                    // dd($user);

                    $conform = transection::join('users', 'users.id', '=', 'transections.user_id')->where('receiver_id', '=', Auth::user()->id)->where('user_id', '!=', (Auth::user()->id))->get();

                    // $paydone= transection::join('users','users.id', '=' , 'transections.user_id')->get();
                    // dd($paydone);
                    return view('user.dashboard', compact('data', 'user', 'conform', 'admin'));

                } else {
                    return redirect('user/login');
                }

            } else {
                return redirect('user/login');
            }
        } catch (exception $e) {
            return view('404');
        }

    }
}