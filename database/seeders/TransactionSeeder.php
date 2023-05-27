<?php

namespace Database\Seeders;

use App\Models\Provide_Help;
use App\Models\transection;
use App\Models\User;
use App\Models\user_payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user1@gmail.com')->first();
        if ($user) {
            $provideHelp = Provide_Help::where('users_id', $user->id)->first();
            if ($provideHelp) {
                $receiver =  User::where('email', 'admin@gmail.com')->first();
                $transactionCheck = transection::where('user_id', $user->id)->first();
                if(!$transactionCheck){
                    $transaction = new transection();
                    $transaction->user_id = $user->id;
                    $transaction->get_ammount = $provideHelp->provide_help_ammount;
                    $transaction->sender_id = $user->id;
                    $transaction->receiver_id = $receiver ? $receiver->id : "";
                    $transaction->tran_status = 1;
                    $transaction->save();
                }

                $userPaymentCheck = user_payment::where('user_id', $user->id)->first();
                if(!$userPaymentCheck){
                    $payment = new user_payment;
                    $payment->user_id = $user->id;
                    $payment->provide_help_ammount = $provideHelp->provide_help_ammount;
                    $payment->get_help_ammount = $provideHelp->get_help_ammount;
                    $payment->ammount_Received = '0';
                    $payment->ammount_pendding = $provideHelp->get_help_ammount;
                    $payment->unique_id = $receiver->unique_pin;
                    $payment->pay_status = '0';
                    $payment->save();
                }
            }
        }
    }
}
