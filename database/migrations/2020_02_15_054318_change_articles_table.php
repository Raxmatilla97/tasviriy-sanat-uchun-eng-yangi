<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {

            // Yangiliklar bo'limlari ulandi
         $table->unsignedBigInteger('cate_id')->default('1');
         $table->foreign('cate_id')->references('id')->on('articl_categories');

            // Foydalanuvchilar tablitsiyasi ulandi
         $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
