<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banksoal extends Model
{
    protected $table = 'banksoal';

    protected $fillable = [
        'soal_file',
        'soal_teks',
        'soal_opsi1',
        'soal_opsi2',
        'soal_opsi3',
        'soal_opsi4',
        'soal_opsi5',
        'soal_file1',
        'soal_file2',
        'soal_file3',
        'soal_file4',
        'soal_file5',
        'soal_jawaban',
        'soal_bobot',
        'created_at',
        'updated_at'
    ];
}
