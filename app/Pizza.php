<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizze';

    protected $fillable = 
    [
    'nome',
    'prezzo',
    'disponibile'
    ];
}
