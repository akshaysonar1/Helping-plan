<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provide_Help;
use App\Models\user_payment;
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
            $users = user_payment::join('users', 'users.id', '=', 'user_payments.user_id')->where('ammount_pendding', '>', 0)->where('user_id', '!=', (Auth::user()->id))->get();
           
            //  $users = Provide_Help::join('users','users.id','=', 'provide__helps.users_id')->get() ;

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
        $contact = ContactUs::get();
        return view('customer_details.contactus', compact('contact'));
    }
}