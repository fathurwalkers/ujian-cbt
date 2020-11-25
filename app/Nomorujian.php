<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomorujian extends Model
{
    protected $table = 'nomorujian';

    public $timestamps = false;

    protected $fillable = ['nomorujian'];

    public function pesertaujian()
    {
        return $this->hasOne('App\PesertaUjian');
    }
}
