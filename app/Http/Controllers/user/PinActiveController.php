<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\PinModel;
use App\Models\Provide_Help;
use App\Models\transection;
use App\Models\User;

use Exception;

class PinActiveController extends Controller
{
    //
    public function pinactive($id, Request $request)
    {

        try {

            $user = PinModel::where('pin_number', '=', $request->pin_number)->first();

            if (empty($user->pin_sale_user_id)) {
                if (empty($user->pin_ammount)) {

                    return redirect('user/dashboard')->with('error', 'This Pin is not valide');
                } else {


                    if ($user->pin_ammount == '500') {
                        $provide_help_ammount = '1000';
                        $get_help_ammount = '2000';
                    } elseif ($user->pin_ammount == '1000') {
                        $provide_help_ammount = '3000';
                        $get_help_ammount = '6000';
                    } elseif ($user->pin_ammount == '2000') {
                        $provide_help_ammount = '5000';
                        $get_help_ammount = '12000';
                    }

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
        } catch (exception $e) {
            return view('404');
        }

use Illuminate\Support\Facades\Auth;

class PinActiveController extends Controller
{
    public function pinactive($id, Request $request)
    {
        $user = PinModel::where('pin_number', '=', $request->pin_number)->first();
        if (empty($user->pin_sale_user_id)) {
            if (empty($user->pin_ammount)) {
                return redirect('user/dashboard')->with('error', 'This Pin is not valide');
            } else {
                if ($user->pin_ammount == '500') {
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
                    $transection = new transection();
                    $transection->user_id = $authUser->id;
                    $transection->get_ammount = $provide_help_ammount - $amountCheck;
                    $transection->sender_id = $authUser->id;
                    $transection->receiver_id = $mainUser ? $mainUser->id : null;
                    $transection->provide_help_id = $mainProvideHelp ? $mainProvideHelp->id : null;
                    $transection->tran_status = "0";
                    $transection->save();
                }

                dd($transection);
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

    }
}