<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $timestamps = false;

    protected $table = 'mapel';

    protected $fillable = [
        'kode',
        'nama'
    ];
}
