<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalujian extends Model
{
    protected $table = 'jadwalujian';
    protected $fillable = [
        'ujian_nama',
        'ujian_jumlahsoal',
        'ujian_tanggal',
        'ujian_estimasiwaktu',
        'ujian_waktumulai',
        'ujian_waktuselesai',
        'ujian_jenissoal',
        'created_at',
        'updated_at'
    ];
}
