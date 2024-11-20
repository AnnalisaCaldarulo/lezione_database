<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // comunicare con la tabella, DESCRIVERE DA COSA E' COMPOSTO UN BOOK

    // ! tutte le proprietà di book
    protected $fillable = [
        'title', 
        'plot', 
        'price', 
        'pages',
        'cover'
    ];

}

