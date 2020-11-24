<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalujiansTable extends Migration
{
    public function up()
    {
        Schema::create('jadwalujian', function (Blueprint $table) {
            $table->id();
            $table->string('ujian_nama');
            $table->string('ujian_jumlahsoal');
            $table->string('ujian_tanggal');
            $table->string('ujian_estimasiwaktu');
            $table->string('ujian_waktumulai');
            $table->string('ujian_waktuselesai');
            $table->string('ujian_jenissoal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwalujian');
    }
}
