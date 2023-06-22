<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProvideHelp;
use Illuminate\Http\Request;
use App\Models\Provide_Help;
use App\Models\user_payment;
use App\Models\User;
use DB;
use Auth;
use Exception;
use App\Models\transection;
use App\Models\ContactUs;

class CustomerDetailsController extends Controller
{
    //
    public function CustomerDetails()
    {
        try {
            //$users = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('ammount_pendding', '>', 0)->where('user_id', '!=', (Auth::user()->id))->get();
              $users = Provide_Help::join('users','users.id','=', 'provide__helps.users_id')->get() ;
            

            return view('customer_details.customer_details', compact('users'));
        } catch (exception $e) {
            return view('404');
        }
    }

    public function payconfarm()
    {
        try {
            $conform = transection::join('users', 'users.id', '=', 'transections.user_id')->where('receiver_id', '=', Auth::user()->id)->where('user_id', '!=', (Auth::user()->id))->get();
            return view('customer_details.payment', compact('conform'));
        } catch (exception $e) {
            return view('404');
        }
    }

    public function contactdetails(){
        $contact = ContactUs::orderBy('id', 'DESC')->get();
        
        return view('customer_details.contactus', compact('contact'));
    }

    public function UsersDetails(){
        // $details=User::where('unique_pin',Null)->where('user_type' ,'==','0')->get();
       
        $details= Provide_Help::join('users','users.id','=', 'provide__helps.users_id')->orwhere('users.unique_pin',Null)
     ->get() ;
        
        return view('admin.UsersDetails', compact('details'));
    }

    public function userDelete(Request $request){
        $user=User::where('id',$request->id)->first();
        $user->delete();
        return response()->json(['message' => "record are deleted"]);
    }
}