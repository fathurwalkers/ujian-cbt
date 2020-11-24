<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrianUjiansTable extends Migration
{
    public function up()
    {
        Schema::create('antrian_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomorujian_id');
            $table->string('antrian');
            $table->string('tanggal_ujian');
            $table->string('waktu_ujian');
            $table->foreign('nomorujian_id')->references('id')->on('nomorujian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antrian_ujian');
    }
}
