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

    public function pesertaujian_peserta()
    {
        return $this->belongsTo('App\Peserta');
    }

    public function pesertaujian_nomorujian()
    {
        return $this->belongsTo('App\Nomorujian');
    }
}
