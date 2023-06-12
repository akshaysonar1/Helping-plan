<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Auth;
use Exception;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    public function contactus(Request $request){
   
        try{
                $contact = new ContactUs; 
                $contact->user_name= $request->user_name;
                $contact->mobile= $request->mobile;
                $contact->subject= $request->subject;
                $contact->user_message= $request->user_message;
                $contact->save();
        

                return redirect('user/contact')->with('message',"Your message has been send. Thank you!");

            }catch (Exception $e) {
                Log::error("Contact controller error: " . $e->getMessage());
                return redirect('user/contact')->with('error', 'Something went wrong');
            }

    }
}
