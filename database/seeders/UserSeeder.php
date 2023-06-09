<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user1@gmail.com')->first();
        if (!$user) {
            DB::table('users')->insert([
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('12345678'),
                'user_type' => '2',
                'customer_id' => '12345123456',
                'mobile' => '7878787878',
                'bank_name' => 'Axis Bank',
                'account_no' => '112233445566',
                'ifsc_code' => 'BOBD123456',
                'phone_pay_no' => '1234567890',
                'google_pay_no' => '1234567890',
                'upi_link' => '1234567890ybl',
                'unique_pin' => 'abcdefghi1',
            ]);
        }else{
            $user->user_type = '2';
            $user->update();
        }
    }
}
