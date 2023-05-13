<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'user_type' => '1',
            'customer_id' => '88997764',
            'mobile' => '1234567890',
            'bank_name' => 'Axis Bank',
            'account_no' => '112233445566',
            'ifsc_code' => 'BOBD123456',
            'phone_pay_no' => '1234567890',
            'google_pay_no' => '1234567890',
            'upi_link' => '1234567890ybl',
        ]);

    }
}