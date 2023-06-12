<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    //
    public function profileupdate($id, Request $request)
    {
        try {
            $user = User::where('id', $id)->first();
            $data['name'] = $request->name;
            $data['state'] = $request->state;
            $data['city'] = $request->city;
            $data['pin_code'] = $request->pin_code;
            $data['bank_name'] = $request->bank_name;
            $data['account_no'] = $request->account_no;
            $data['ifsc_code'] = $request->ifsc_code;
            $data['phone_pay_no'] = $request->phone_pay_no;
            $data['google_pay_no'] = $request->google_pay_no;
            $data['upi_link'] = $request->upi_link;

            User::find($user->id)->update($data);
            return redirect()->back()->with('message', "Your Record has been Updated. Thank you!");
        } catch (Exception $e) {
            Log::error("Profile controller error: " . $e->getMessage());
            return redirect('user/dashboard')->with('error', 'Something went wrong');
        }

    }


    public function passwordupdate($id, Request $request)
    {
        try {
            $user = User::where('id', $id)->first();
            if (Hash::check($request->oldpassword, $user->password)) {
                $data['password'] = Hash::make($request->password);
                User::find($user->id)->update($data);
                return redirect()->back()->with('message', "Your Password has been Updated. Thank you!");
            } else {
                return redirect()->back()->with('message', "Old Password Not Matched.");
            }
        } catch (Exception $e) {
            Log::error("Profile controller error: " . $e->getMessage());
            return redirect('user/dashboard')->with('error', 'Something went wrong');
        }


    }
}