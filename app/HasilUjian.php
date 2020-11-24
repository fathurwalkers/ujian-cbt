<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    protected $table = 'hasil_ujian';

    protected $fillable = [
        'pesertaujian_id',
        'jadwalujian_id',
        'banksoal_id',
        'hasil_isianjawaban',
        'hasil_tanggalmulai',
        'hasil_waktumulai',
        'hasil_waktuselesai',
        'hasil_skorujian',
        'created_at',
        'updated_at'
    ];
}
