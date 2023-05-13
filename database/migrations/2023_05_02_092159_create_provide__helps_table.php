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
            $table->string('provide_help_ammount')->nullable();
            $table->string('get_help_ammount')->nullable(); 
            $table->string('ammount_Received')->nullable();
            $table->string('ammount_pendding')->nullable();
            $table->string('customer_id');
            $table->enum('status',[0,1])->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
