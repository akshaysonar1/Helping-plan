<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Password_Reset_Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class ForgotPasswordController extends Controller
{
    //
    public function forgotpassword()
    {
        try {
            $user = Password_Reset_Request::join('users', 'users.mobile', '=', 'password_reset_requests.mobile')->get();

            return view('forgotpassword.forgotpassword', compact('user'));
        } catch (exception $e) {
            return view('404');
        }
    }

    public function passwordupdate(Request $request)
    {

       
            $user = $request->mobile;
            $data['password'] = Hash::make($request->password);

             User::where('mobile', $user)->update($data);

            $password_status=Password_Reset_Request::where('mobile', $request->mobile)->first();
            $password_status->password_status = '1';

            $password_status->update();
            return redirect('forgotpassword/forgotpassword')->with('message', "Password Are Updated");
        }  

    }
