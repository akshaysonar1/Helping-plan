<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user_payment;
class transection extends Model
{
    use HasFactory;
    public $table = 'transections';

    public function provideHelp()
    {
        return $this->belongsTo(Provide_Help::class, 'provide_help_id');
    }

    public function receiverUser()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // function getUserPayments() {
    //     return $this->belongsTo(user_payment::class, 'unique_id', 'past_receiver_id');
    // }
    
    // function getUnpaidAmtIdAttribute() {
    //     $umiqueID = $this->getUserPayments->where('pay_status', '0')->first('unique_id');
    // }
}
