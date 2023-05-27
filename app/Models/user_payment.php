<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class user_payment extends Model
{
    use HasFactory;
    public $table = 'user_payments';

    public function userPayment()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
