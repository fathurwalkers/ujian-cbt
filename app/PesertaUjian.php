<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaUjian extends Model
{
    protected $table = 'peserta_ujian';
    protected $fillable = [
        'nomorujian_id',
        'peserta_id',
        'tanggal_masuk',
        'waktu_masuk',
        'created_at',
        'updated_at'
    ];

    public function peserta()
    {
        return $this->belongsTo('App\Peserta');
    }

    public function nomorujian()
    {
        return $this->belongsTo('App\Nomorujian');
    }
}
