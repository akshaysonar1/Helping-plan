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
        Schema::create('pin_genrate_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('pin_number')->unique();
            $table->string('total_pin');
            $table->string('pin_ammount');
            $table->string('provide_help_ammount')->nullable();
            $table->string('get_help_ammount')->nullable();
            $table->string('crearte_date')->nullable();
            $table->string('pin_sale_date')->nullable(); 
            $table->foreign('pin_sale_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('pin_sale_user_id')->nullable();
            $table->foreign('pin_sale_user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('pin_status',['0','1'])->nullable();
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
        Schema::dropIfExists('pin_genrate_tabels');
    }
};
