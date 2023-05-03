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
        Schema::create('provide__helps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('provide_help_ammount')->nullable();
            $table->string('get_help_ammount')->nullable(); 
            $table->string('ammount_Received')->nullable();
            $table->string('ammount_pendding')->nullable();
            $table->string('customer_id');
            $table->enum('status',[0,1])->nullable();
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
        Schema::dropIfExists('provide__helps');
    }
};
