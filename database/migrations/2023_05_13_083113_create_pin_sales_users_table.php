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
        Schema::create('pin_sales_users', function (Blueprint $table) {
            $table->id();
            $table->foreign('pin_id')->references('id')->on('pin_genrate_tabel')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pin_id')->nullable();
            $table->string('pin_ammount')->nullable();
            $table->string('provide_help_amount')->nullable();
            $table->string('pin_help_amount')->nullable();
            $table->string('sale_mobile')->nullable();
            $table->string('pin_use_mobile')->nullable();
            $table->string('user_id')->nullable();
            $table->string('pin_status')->nullable();
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
        Schema::dropIfExists('pin_sales_users');
    }
};
