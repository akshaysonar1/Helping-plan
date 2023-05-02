<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('customer_id')->unique();
            $table->string('mobile');
            $table->string('state');
            $table->string('city');
            $table->string('pin_code');
            $table->enum('user_type',['0','1']);
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('ifsc_code');
            $table->string('phone_pay_no');
            $table->string('google_pay_no');
            $table->string('upi_link');
            $table->enum('status',['0','1']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
