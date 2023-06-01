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
        
            
            $contact->user_name= $request->user_name;
            $contact->mobile= $request->mobile;
            $contact->subject= $request->subject;
            $contact->user_message= $request->user_message;
            $contact->save();
     

        return redirect('user/contact')->with('message',"Your message has been send. Thank you!");

    }
}
