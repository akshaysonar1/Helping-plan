<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinModel extends Model
{
    // use HasFactory;

    protected $table = "pin_genrate_tabel";
    protected $fillable = [
        'pin_number ',
        'pin_ammount ',
        'total_pin ',
        'provide_help_ammount ',
        'get_help_ammount ',
        'pin_sale_date ',
        'pin_sale_user_id  ',
        'pin_status ',
        'created_at ',
        'updated_at ',


    ];
}
