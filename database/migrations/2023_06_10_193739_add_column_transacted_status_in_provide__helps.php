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
        Schema::table('provide__helps', function (Blueprint $table) {
            $table->enum('transacted_status', ['0', '1'])->default('0')->after('users_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provide__helps', function (Blueprint $table) {
            $table->dropColumn('transacted_status');
        });
    }
};
