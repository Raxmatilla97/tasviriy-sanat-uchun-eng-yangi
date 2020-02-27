<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeGuruhlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guruhlar', function (Blueprint $table) {
        $table->unsignedBigInteger('kurator_id')->default('1');
        $table->foreign('kurator_id')->references('id')->on('kuratorlar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guruhlar', function (Blueprint $table) {
            //
        });
    }
}
