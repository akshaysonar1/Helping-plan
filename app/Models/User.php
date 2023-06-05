<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\user_payment;
use App\Models\transection;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'mobile',
        'password',
        'customer_id',
        'user_type',
        'state',
        'city',
        'pin_code',
        'bank_name',
        'account_no',
        'ifsc_code',
        'phone_pay_no',
        'google_pay_no',
        'upi_link',

    ];

    protected $appends = ['checkRemainingTransctions'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function provideHelp()
    {
        return $this->hasMany(Provide_Help::class, 'users_id');
    }

    public function provideHelpUser()
    {
        return $this->hasOne(Provide_Help::class, 'users_id');
    }
    public function userPayment()
    {
        return $this->hasMany(user_payment::class,'user_id');
    }

    public function getPaymentAmmountArttribute()
    {
        $helpAmmount = $this->provideHelp()->sum('get_help_ammount');
        $ammountReceived = $this->provideHelp()->sum('ammount_received');
        if($helpAmmount <= $ammountReceived){
            return 1;
        }
        return 0;
    }

    public function getGetHelpAmmountAttribute()
    {
        // dd('hii');
        $helpAmmountTotal = $this->provideHelp()->sum('get_help_ammount');
        return $helpAmmountTotal;
    }
    public function transactions()
    {
        return $this->hasMany(transection::class, 'receiver_id');
    }

    public function getGetAmmountAttribute()
    {
        $transactions = $this->transactions()->sum('get_ammount');
        if($transactions){
            return $transactions;
        }

        return 0;
    }

    public function senderTransactions()
    {
        return $this->hasMany(transection::class, 'sender_id');
    }
    public function getCheckRemainingTransctionsAttribute()
    {
        $transactions = $this->senderTransactions()->where('tran_status', '!=', '1')->get();
        if(count($transactions) > 0){
    
            return 1;
        }
        
        return 0;
    }
}
