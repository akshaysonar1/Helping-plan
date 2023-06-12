<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\transection;
class user_payment extends Model
{
    use HasFactory;
    public $table = 'user_payments';

    public function userPayment()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    // function getTransections() {
    //     return $this->hasMany(transection::class, 'unique_id', 'past_receiver_id');
    // }
}
