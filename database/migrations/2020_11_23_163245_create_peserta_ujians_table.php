<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaUjiansTable extends Migration
{
    public function up()
    {
        Schema::create('peserta_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomorujian_id');
            $table->unsignedBigInteger('peserta_id');
            $table->string('tanggal_masuk');
            $table->string('waktu_masuk');

            $table->foreign('nomorujian_id')->references('id')->on('nomorujian');
            $table->foreign('peserta_id')->references('id')->on('peserta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peserta_ujian');
    }
}
