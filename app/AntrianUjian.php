<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianUjian extends Model
{
    protected $table = 'antrian_ujian';

    protected $fillable = [
        'nomorujian_id',
        'antrian',
        'tanggal_ujian',
        'waktu_ujian',
        'created_at',
        'updated_at'
    ];
}
