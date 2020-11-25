<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    protected $fillable = [
        'peserta_nama',
        'peserta_nip',
        'peserta_pangkat',
        'peserta_golongan',
        'peserta_jabatan',
        'created_at',
        'updated_at'
    ];

    public function pesertaujian()
    {
        return $this->hasOne('App\PesertaUjian');
    }
}
