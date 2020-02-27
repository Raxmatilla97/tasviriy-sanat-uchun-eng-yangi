<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ismi');
            $table->string('familyasi');
            $table->string('sharifi');
            $table->string('yashash_manzili');
            $table->string('tell_nomer');
            $table->string('surat');
            $table->string('pass_num');
            $table->string('pass_ser')->default('Xozircha yoq');
            $table->string('tugulgan_kun');
            $table->string('tugulgan_oy');
            $table->string('tugulgan_yil');
            $table->string('tugulgan_joy');

            $table->string('talim_shakli');
             // qo'shimcha ishlar shu joydan davom etadi, masalan kurator kim, bu talaba hozir o'qivotimi yoki akademik olib ketdimi kabilar uchun.
            $table->string('pass_copy');

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
        Schema::dropIfExists('students');
    }
}
