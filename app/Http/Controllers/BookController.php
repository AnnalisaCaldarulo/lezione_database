<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function index()
    {
        // query al database: vai nella tabella books e restituiscimi tutti i libri
        $books = Book::all();
        return view('book.index', compact('books')); // ['books'=>$books]
    }

    public function store(BookCreateRequest $request) //dependency injection
    {
        // ! MASS ASSIGNMENT
        // chiavi: nomi delle colonne
        //valore : dato da salvare nella tabella
        $book = Book::create([
            'title' => $request->title,
            'plot' => $request->plot,
            'price' => $request->price,
            'pages' => $request->pages,
            // 'topolino'=>'ti buco il sito'
            'cover'=> $request->file('cover')->store('covers', 'public')
        ]);
        // dd($book);
        return redirect()->route('homepage')->with('success', 'Libro creato');
    }
}
