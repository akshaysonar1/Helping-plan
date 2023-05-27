<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;
use App\Models\Provide_Help;
use App\Models\transection;
use App\Models\User;
use Carbon\Carbon;

use Exception;

use Illuminate\Support\Facades\Auth;

class PinActiveController extends Controller
{
    public function pinactive($id, Request $request)
    {
       try{

            $user = PinModel::where('pin_number', '=', $request->pin_number)->first();
           
            if (empty($user->pin_sale_user_id)) {
                if (empty($user->pin_ammount)) {
                    return redirect('user/dashboard')->with('error', 'This Pin is not valide');
                } else {
                    $provide_help_ammount = '1000';
                    if($user->pin_sell_status!=1){
                        return redirect('user/dashboard')->with('error', 'This Pin is not sold');
                    }else if ($user->pin_ammount == '500') {
                        $provide_help_ammount = '1000';
                        $get_help_ammount = '2000';
                    } elseif ($user->pin_ammount == '1000') {
                        $provide_help_ammount = '3000';
                        $get_help_ammount = '6000';
                    } elseif ($user->pin_ammount == '2000') {
                        $provide_help_ammount = '5000';
                        $get_help_ammount = '12000';
                    }
                    $authUser = Auth::user();
                    $transaction = transection::orderBy('provide_help_id', 'desc')->first();
                    $checkProviderHelperUser = Provide_Help::where('id', '>',  $transaction->user_id)->where('users_id', '!=', Auth::user()->id)->where('status', null)->get();
                    $amountCheck = 0;
                    $mainUser = User::where('email', 'user1@gmail.com')->first();
                    $mainProvideHelp = Provide_Help::where('users_id', $mainUser->id)->first();
                    if (count($checkProviderHelperUser) > 0) {
                        foreach ($checkProviderHelperUser as $checkProviderUser) {
                            if ($amountCheck < $provide_help_ammount) {
                                $amountCheck = $amountCheck + $checkProviderUser->ammount_pendding;
                                $transection = new transection();
                                $transection->user_id = $authUser->id;
                                $transection->get_ammount = $amountCheck > $checkProviderUser->ammount_pendding ? $checkProviderUser->ammount_pendding : $amountCheck;
                                $transection->sender_id = $authUser->id;
                                $transection->receiver_id = $checkProviderUser->users_id;
                                $transection->provide_help_id = $checkProviderUser->id;
                                $transection->tran_status = "0";
                                
                                $transection->save();
                            }
                        }
                    }
                    if ($amountCheck < $provide_help_ammount) {
                        $currentDate = Carbon::now();
                        $tomorrow = $currentDate->addDay(2);
                        $transection = new transection();
                        $transection->user_id = $authUser->id;
                        $transection->get_ammount = $provide_help_ammount - $amountCheck;
                        $transection->sender_id = $authUser->id;
                        // $transection->receiver_id = $mainUser ? $mainUser->id : null;
                        // $transection->provide_help_id = $mainProvideHelp ? $mainProvideHelp->id : null;
                        $transection->tran_status = "0";
                        $transection->create_date = $currentDate;
                        $transection->end_date = $tomorrow;
                        $transection->pin_number = $request->pin_number;
                        $transection->save();

                        $users = User::where('user_type', '0')->with(['userPayment', 'provideHelpUser'])->get();
                        $helpAmmount = $transection->get_ammount;
                        if(isset($users) && count($users) > 0){
                            foreach($users as $userlist){
                                // dd($userlist);
                                if($userlist->getHelpAmmount > $userlist->getAmmount && $helpAmmount > 0){
                                    $totalGetAmmount = $userlist->getHelpAmmount-$userlist->getAmmount;
                                    $gethelpAmmount = $totalGetAmmount-$helpAmmount;
                                    if($gethelpAmmount > 0){
                                        $remainingHelpAmmount = 0;
                                        $gethelpAmmount = abs($gethelpAmmount);
                                        $remainedAmt = $totalGetAmmount-$gethelpAmmount;
                                    }else{
                                        $remainingHelpAmmount = abs($gethelpAmmount);
                                        $remainedAmt = $totalGetAmmount;
                                    }
                                    $payment = new transection();
                                    $payment->user_id = $authUser->id;
                                    $payment->sender_id = $authUser->id;
                                    $payment->receiver_id = $userlist->id;
                                    $payment->provide_help_id = $userlist->provideHelpUser->id;
                                    // $payment->payment_success_date = $currentDate;
                                    $payment->tran_status = 0;
                                    $payment->create_date = $currentDate;
                                    $payment->end_date = $tomorrow;
                                    $payment->get_ammount = $remainedAmt;
                                    $payment->split_status = '1';
                                    $payment->pin_number = $transection->pin_number;
                                    $payment->save();

                                    $helpAmmount = $remainingHelpAmmount;
                                }
                            }
                        }
                        
                        if($helpAmmount > 0){
                            $defaultUser = User::where('user_type', '2')->first();
                            if($defaultUser){
                                $defaultpayment = new transection();
                                $defaultpayment->user_id = $authUser->id;
                                $defaultpayment->sender_id = $authUser->id;
                                $defaultpayment->receiver_id = $defaultUser->id;
                                $defaultpayment->provide_help_id = $defaultUser->provideHelpUser->id;
                                // $defaultpayment->payment_success_date = $currentDate;
                                $defaultpayment->tran_status = 0;
                                $defaultpayment->create_date = $currentDate;
                                $defaultpayment->end_date = $tomorrow;
                                $defaultpayment->get_ammount = $helpAmmount;
                                $defaultpayment->split_status = '1';
                                $defaultpayment->pin_number = $transection->pin_number;
                                $defaultpayment->save();
                            }
                        }
                    }

                
                    // dd($provide_help_ammount);
                    $data = PinModel::where('id', $user->id)->first();

                    $data->provide_help_ammount = $provide_help_ammount;
                    $data->get_help_ammount = $get_help_ammount;
                    $data->pin_sale_date = $request->date;
                    $data->pin_sale_user_id = $request->id;
                    $data->pin_status = '0';
                    $data->update();
                    $providerHelp = Provide_Help::where('users_id', $request->id)->first();
                    $providerHelp->provide_help_ammount = $provide_help_ammount;
                    $providerHelp->get_help_ammount = $get_help_ammount;
                    $providerHelp->ammount_Received = '0';
                    $providerHelp->ammount_pendding = $get_help_ammount;
                    $providerHelp->status = '0';
                    $providerHelp->update();
                    $into = User::where('id', $request->id)->first();
                    $into->unique_pin = $request->pin_number;
                    $into->status = '1';
                    $into->update();
                    
                    
                }
            } else {
                return redirect('user/dashboard')->with('error', 'This Pin Already Exsiste');
            }
            return redirect('user/dashboard');

        }catch(Exception $e){
            dd($e);
        }
    }

    public function deactive($id,Request $request){
        $change = PinModel::where('pin_sale_user_id', '=', $id)->first();
      
            $change->pin_status = '1';
       
       
        $updated = transection::where('user_id', '=', $id)->first();
      
            $updated->tran_status = '2';
       
        $updated->update();
        return redirect()->route('user/dashboard');
    }
}