<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Auth;

class ContactController extends Controller
{
    public function contactus(Request $request){
   
        $contact = new ContactUs;
        $contact->user_id = Auth::user()->id;
        $contact->user_name= $request->user_name;
        $contact->user_email= $request->user_email;
        $contact->subject= $request->subject;
        $contact->user_message= $request->user_message;
        $contact->save();

        return redirect('user/contact')->with('message',"Your message has been sent. Thank you!");

    }
}
