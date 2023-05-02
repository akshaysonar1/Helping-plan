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
        Schema::create('table_genrate_pin', function (Blueprint $table) {
            $table->id();
            $table->string('pin_number')->unique();
            $table->string('pin_ammount');
            $table->string('provide_help_ammount');
            $table->string('get_help_ammount');
            $table->string('crearte_date');
            $table->string('pin_sale_date'); 
            $table->foreign('pin_sale_user_id')->references('id')->on('users');
            $table->enum('pin_status',['0','1']);
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
        Schema::dropIfExists('table_genrate_pin');
    }
};
