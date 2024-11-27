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
        'cover',
        'user_id'
    ];
    //! FUNZIONE DI RELAZIONE - ONE TO ONE
    // = UN LIBRO APPARTIENE A UN SOLO UTENTE
    // FUNZIONE PER RECUPERARE QUELL'UTENTE

    public function user() //singolare
    {
        return $this->belongsTo(User::class);
        //$this - il singolo oggetto di classe Book
        // belongs to - appartiene a
        // User::class - un oggetto di classe User
    }

    //! funzione di relazione con le categorie: devo recuperare tutte le categorie del singolo libro
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}

