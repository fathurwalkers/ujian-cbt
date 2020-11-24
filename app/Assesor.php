<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assesor extends Model
{
    protected $table = 'assesor';

    protected $fillable = [
        'assesor_nama',
        'assesor_nira',
        'assesor_urutan',
        'assesor_jeniskelamin',
        'created_at',
        'updated_at'
    ];
}
