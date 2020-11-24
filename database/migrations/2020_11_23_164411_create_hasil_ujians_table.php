<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilUjiansTable extends Migration
{
    public function up()
    {
        Schema::create('hasil_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pesertaujian_id');
            $table->unsignedBigInteger('jadwalujian_id');
            $table->unsignedBigInteger('banksoal_id');
            $table->string('hasil_isianjawaban');
            $table->string('hasil_tanggalmulai');
            $table->string('hasil_waktumulai');
            $table->string('hasil_waktuselesai');
            $table->string('hasil_skorujian');

            $table->foreign('pesertaujian_id')->references('id')->on('peserta_ujian');
            $table->foreign('jadwalujian_id')->references('id')->on('jadwalujian');
            $table->foreign('banksoal_id')->references('id')->on('banksoal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_ujian');
    }
}
