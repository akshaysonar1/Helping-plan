<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Password_Reset_Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    //
    public function forgotpassword(){
        $user = Password_Reset_Request::get();
        
        
        return view('forgotpassword.forgotpassword', compact('user'));
    }

    public function passwordupdate(Request $request){
      
        
        $user=$request->mobile;
        $data['password'] = Hash::make($request->password);
 
        User::where('mobile' , $user)->update($data);
        return redirect('forgotpassword/forgotpassword')->with('success',"Record are Updated");

    }
}
 