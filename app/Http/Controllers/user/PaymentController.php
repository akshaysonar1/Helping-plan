<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provide_Help;
use App\Models\user_payment;
use App\Models\transection;
use App\Models\User;
use Carbon\Carbon;
use Exception;

use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function payment(Request $request)
    {




        $payment = transection::where('user_id', '=', Auth::user()->id)->first();

        $payment->receiver_id = $request->receiver_id;
        $image = $request->File('image');
        $extenstion = $image->getClientOriginalName();
        $filename = time() . '.' . $extenstion;
        $destinationPath = public_path('user/assets/img/payment');
        $image->move($destinationPath, $filename);
        $payment->image = $filename;
        $payment->update();


        return redirect('user/dashboard')->with('message', "Your Payment Image  Has Been Send. Thank you!");

    }


    public function conformetion($id, Request $request)
    {

        $data = transection::where('user_id', $id)->first();


        $data->tran_status = '1';
        $currentDate = Carbon::now();
        $data->payment_success_date = $currentDate;

        $data->update();

        $providerHelp = Provide_Help::where('users_id', $id)->first();
        $user = User::where('id', $id)->first();
        
        $payment = new user_payment;
        $payment->user_id = $providerHelp->users_id;
        $payment->provide_help_ammount = $providerHelp->provide_help_ammount;
        $payment->get_help_ammount = $providerHelp->get_help_ammount;
        $payment->ammount_Received = $providerHelp->ammount_Received;
        $payment->ammount_pendding = $providerHelp->ammount_pendding;
        $payment->unique_id = $user->unique_pin;
        $payment->pay_status = '0';

        $payment->save();

        $change = user_payment::where('user_id', '=', $data->receiver_id)->first();
      //  $updated = Provide_Help::where('users_id', '=', $data->receiver_id)->first();

        if ($change->get_help_ammount == $change->ammount_Received) {
            $change->pay_status = '1';
        } else {
            $change->ammount_Received += $payment->provide_help_ammount;
            if ($change->get_help_ammount == $change->ammount_Received) {
                $change->pay_status = '1';
            } else {

            }

            $change->update();
        }

        $transaction = transection::where('id', $request->user_id)->first();

        if (!$transaction) {
            return redirect()->back()->with('error', "Transaction Not Fount");
        }

        $transaction->tran_status = 1;
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

        return redirect('user/dashboard');
    }


     
}