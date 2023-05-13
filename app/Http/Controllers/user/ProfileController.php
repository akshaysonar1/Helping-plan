<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function profileupdate($id, Request $request){

         
         
        $user = User::where('id',$id)->first();

       $data['name']= $request->name;
       $data['state']= $request->state;
       $data['city']= $request->city;
       $data['pin_code']= $request->pin_code;
       $data['bank_name']= $request->bank_name;
       $data['account_no']= $request->account_no;
       $data['ifsc_code']= $request->ifsc_code;
       $data['phone_pay_no']= $request->phone_pay_no;
       $data['google_pay_no']= $request->google_pay_no;
       $data['upi_link']= $request->upi_link;
        
       User::find($user->id)->update($data);
       return redirect('user/dashboard');

    }
}
