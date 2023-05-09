<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provide_Help;
use DB ;
class CustomerDetailsController extends Controller
{
    //
    public function CustomerDetails(){
        $users = Provide_Help::join('users','users.id','=', 'provide__helps.users_id')->get() ;
        
        return view('customer_details.customer_details',compact('users'));
    }
   
}
