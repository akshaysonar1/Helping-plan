<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;
use Auth;
use App\Models\Provide_Help;
use App\Models\User;
class PinActiveController extends Controller
{
    //
    public function pinactive($id,Request $request){

   
        
        $user = PinModel::where('pin_number', '=', $request->pin_number)->first();
      
     if(empty($user->pin_sale_user_id)){
        if(empty($user->pin_ammount)){

            return redirect('user/dashboard')->with('error','This Pin is not valide');
        }else{

        
        if($user->pin_ammount=='500'){
            $provide_help_ammount='1000';
            $get_help_ammount='2000';
        }
        elseif($user->pin_ammount=='1000'){
            $provide_help_ammount='3000';
            $get_help_ammount='6000';
        }
        elseif($user->pin_ammount=='2000'){
            $provide_help_ammount='5000';
            $get_help_ammount='12000';
        }
     
        $data = PinModel::where('id',$user->id)->first();
        $data->provide_help_ammount = $provide_help_ammount;
        $data->get_help_ammount = $get_help_ammount;
        $data->pin_sale_date = $request-> date;
        $data->pin_sale_user_id = $request-> id;
        $data->pin_status = '0';
        
        $data->update();
        
        $providerHelp = Provide_Help::where('users_id',$request-> id)->first();
      
        $providerHelp->provide_help_ammount = $provide_help_ammount;
       
        $providerHelp->get_help_ammount = $get_help_ammount;
        $providerHelp->ammount_Received = '0';
        $providerHelp->ammount_pendding = $get_help_ammount;
       
        $providerHelp->update(); 

        $into = User::where('id',$request-> id)->first();
        
         $into->unique_pin = $request->pin_number;
         $into->status = '1';
         $into->update(); 
    }
     }else{
       
        return redirect('user/dashboard')->with('error','This Pin Already Exsiste');
     }

     

       return redirect('user/dashboard');
    }
}
