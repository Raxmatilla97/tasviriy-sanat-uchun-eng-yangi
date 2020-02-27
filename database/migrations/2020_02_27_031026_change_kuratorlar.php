<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeKuratorlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kuratorlar', function (Blueprint $table) {
            $table->unsignedBigInteger('oqituvchilar_id')->default('1');
            $table->foreign('oqituvchilar_id')->references('id')->on('oqituvchilar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kuratorlar', function (Blueprint $table) {
            //
        });
    }
}
