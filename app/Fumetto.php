<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetto extends Model
{
    protected $fillable = [
        'titolo',
        'descrizione',
        'cover',
        'prezzo',
        'serie',
        'data_di_vendita',
        'tipologia',
        'slug',
        
    ];
}
