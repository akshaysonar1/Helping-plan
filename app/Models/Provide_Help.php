<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Provide_Help extends Model
{
    use HasFactory;
    public $table = 'provide__helps';

    public function getUsers()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
