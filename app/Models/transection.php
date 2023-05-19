<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
