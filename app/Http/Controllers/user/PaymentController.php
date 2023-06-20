<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ProvideHelp;
use Illuminate\Http\Request;
use App\Models\Provide_Help;
use App\Models\user_payment;
use App\Models\transection;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Exception;

use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        try{
            
            $payment = transection::where('id', $request->transaction_id)->first();
     
            if(!empty(Auth::user()->bank_name) && !empty(Auth::user()->account_no) && !empty(Auth::user()->ifsc_code)){
               
                if(isset($payment) && !empty($payment)){
                    $payment->receiver_id = $request->receiver_id;
                    $image = $request->File('image');
                    $extenstion = $image->getClientOriginalName();
                    $filename = time() . '.' . $extenstion;
                    $destinationPath = public_path('user/assets/img/payment');
                    $image->move($destinationPath, $filename);
                    $payment->image = $filename;
                    $payment->update();

                    if($payment){
                        return redirect('user/dashboard')->with('message', "Your Payment Image Has Been Send. Thank you!");
                    }else{
                        return redirect('user/dashboard')->with('message', "Your Payment Image Has Not Been Send.");
                    }
                }

            }else{
                return redirect('user/dashboard')->with('message', "Please Fill Bank Details First !");
            }

            return redirect('user/dashboard')->with('message', "Payment Not Found !");

        }catch(Exception $e){
            Log::error("Payment controller error: ". $e->getMessage());
            return redirect('user/dashboard')->with('error', 'Something went wrong');
        }
    }


    public function conformetion($id, Request $request)
    {
        try{
            
                $data = transection::where('user_id', $id)->where('receiver_id', $request->receiver_id)->where('pin_number', $request->unique_pin)->first();
                
                $data->tran_status = '1';
                $currentDate = Carbon::now();
                $data->payment_success_date = $currentDate;
                
                $data->update();
                
                $providerHelp = Provide_Help::where('users_id', $id)->where('status', '0')->first();
                
                $user = User::where('id', $id)->first();
                
                $existUser = user_payment::where("user_id",$providerHelp->users_id)->where("pay_status","0")->first();
                
                if(isset($existUser) && $existUser != NULL){
                    $payment = $existUser;
                }
                else{
                    $payment = new user_payment;   
                }
                $payment->user_id = $providerHelp->users_id;
                $payment->provide_help_ammount = $providerHelp->provide_help_ammount;
                $payment->get_help_ammount = $providerHelp->get_help_ammount;
                $payment->ammount_Received = $providerHelp->ammount_Received;
                $payment->ammount_pendding = $providerHelp->ammount_pendding;
                $payment->unique_id = $user->unique_pin;
                $payment->pay_status = '0';
                
                $payment->save();
                $provideamount = Provide_Help::where('users_id', Auth::user()->id)
                ->where('status', '0')
                ->first();
                $change = user_payment::where('user_id', $request->receiver_id)->where('ammount_pendding', '!=', '0')->where('pay_status', '0')->first();
                
                if(!empty($change->get_help_ammount)){

                
                if ($change->get_help_ammount == $change->ammount_Receive) {
                
                    $change->pay_status = '1';
                    $provideamount->status = '1';
                } else {
            
                    $change->ammount_Received += $request->get_ammount;
                    $change->ammount_pendding -= $request->get_ammount;

                    $provideamount->ammount_Received += $request->get_ammount;
                    $provideamount->ammount_pendding -= $request->get_ammount;
                    
                
                    if ($change->get_help_ammount == $change->ammount_Received) {
                        $change->pay_status = '1';
                        $provideamount->status = '1';
                    } else {

                    }
                
                    $change->update();
                    $provideamount->update();
                }
            }

                $transaction = transection::where('id', $request->user_id)->first();

                if (!$transaction) {
                    return redirect()->back();
                }

                $transaction->tran_status = '1';
                $transaction->create_date = date("Y-m-d H:i:s");
                $image = $request->File('image');
                $extenstion = $image->getClientOriginalName();
                $filename = time() . '.' . $extenstion;
                $destinationPath = public_path('user/assets/img/payment');
                $image->move($destinationPath, $filename);
                $transaction->image = $filename;
                $transaction->save();
            
                $providerHelp = $transaction->provideHelp;
                $providerHelp->ammount_Received = $providerHelp->ammount_Received + $transaction->get_ammount;
                $providerHelp->ammount_pendding = $transaction->get_ammount - $providerHelp->ammount_pendding;
            
                $providerHelp->save();

                if ($providerHelp->ammount_pendding <= 0) {
                    $providerHelp->status = "1";
                    $providerHelp->save();
                }
                $data = new user_payment;
                $data->user_id = Auth::user()->id;
                $data->provide_help_ammount = $providerHelp->provide_help_ammount;
                $data->get_help_ammount = $providerHelp->get_help_ammount;
                $data->ammount_Received = $providerHelp->ammount_Received;
                $data->ammount_pendding = $providerHelp->idammount_pendding;
            
                $data->save();

                // return redirect('user/dashboard');

        }catch(Exception $e){
            Log::error("Payment controller error: ". $e->getMessage());
            return redirect('user/dashboard')->with('error', 'Something went wrong');
        }
    }


     
}