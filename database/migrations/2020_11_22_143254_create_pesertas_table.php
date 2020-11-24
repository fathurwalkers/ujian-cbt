<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('peserta_nama');
            $table->string('peserta_nip');
            $table->string('peserta_pangkat');
            $table->string('peserta_golongan');
            $table->longText('peserta_jabatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
