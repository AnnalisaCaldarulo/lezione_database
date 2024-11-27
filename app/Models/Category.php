<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    // ! funzione di relazione con i libri: devo recuperare tutti i libri di questa categoria

    public function books()
    {
        return $this->belongsToMany(Book::class);
        //return - ritorna
        //this - questa categoria
        //belongs to many -appartiene a molti
        //Book::class - oggetti di classe Book
        //! restituisce una COLLEZIONE
    }
}
