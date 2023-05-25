<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password_Reset_Request extends Model
{
    use HasFactory;

    public $table = 'password_reset_requests';

}