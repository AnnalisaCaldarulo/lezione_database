<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // ! FUNZIONE DI RELAZIONE - ONE TO MANY
    // = UN USER HA TANTI LIBRI
    // FUNZIONE SERVE A RECUPERARE LA COLLEZIONE DI LIBRI CREATI DAL SINGOLO UTENTE

    public function books() //nome del modello relazionato AL PLURALE
    {
        return $this->hasMany(Book::class);
        //return 
        // $this - IL SINGOLO UTENTE ($user)
        // has many - 'ha molti' -> collezione di oggetti collegati
        //Book - oggetti di classe Book
        //! = ritorna la collezione di libri relazionati a questo utente 
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
