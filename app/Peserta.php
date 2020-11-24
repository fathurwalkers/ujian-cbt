<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    protected $fillable = [
        'peserta_nama',
        'peserta_nik',
        'peserta_nip',
        'peserta_pangkat',
        'peserta_jabatan',
        'peserta_golongan',
        'peserta_telepon',
        'peserta_jeniskelamin',
        'created_at',
        'updated_at'
    ];
}
