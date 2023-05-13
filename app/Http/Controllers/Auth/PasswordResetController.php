<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Password_Reset_Request;
class PasswordResetController extends Controller
{
    //
    public function reset(){
        return view('auth.password_reset');
    }

    public function store(Request $request){
        // $validatedData = $request->validate([
           
        // ]);
       
        $user = User::where('mobile', '=', $request->mobile)->first();
        if ($user === null) {
            return redirect('auth/reset')->with('message',"This number is not exist");
         }else{
        $password= new Password_Reset_Request;

        $password->mobile = $request->mobile;
        $password->message = $request->message;

        $password->save();
        
        
        return redirect('auth/reset')->with('message',"Your Request are send");
         }
    }
}
