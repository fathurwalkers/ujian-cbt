<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksoalsTable extends Migration
{
    public function up()
    {
        Schema::create('banksoal', function (Blueprint $table) {
            $table->id();
            $table->string('soal_file')->default(null)->nullable();
            $table->longText('soal_teks');
            $table->string('soal_opsi1');
            $table->string('soal_opsi2');
            $table->string('soal_opsi3');
            $table->string('soal_opsi4');
            $table->string('soal_opsi5');
            $table->longText('soal_file1')->default(null)->nullable();
            $table->longText('soal_file2')->default(null)->nullable();
            $table->longText('soal_file3')->default(null)->nullable();
            $table->longText('soal_file4')->default(null)->nullable();
            $table->longText('soal_file5')->default(null)->nullable();
            $table->string('soal_jawaban');
            $table->string('soal_bobot');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banksoal');
    }
}
