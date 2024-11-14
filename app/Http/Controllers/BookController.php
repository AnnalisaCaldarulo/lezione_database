<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) //dependency injection
    {
        // dd($request->all());
        // ! salviamo nel database un oggetto di classe book
        // $book = new Book();
        // $book->title = $request->title;
        // $book->plot = $request->plot;
        // $book->pages = $request->pages;
        // $book->price = $request->price;
        // $book->topolino = 'dsodhasodhaosd';
        // $book->save();
        // dd($book);

        // ! MASS ASSIGNMENT
        // chiavi: nomi delle colonne
        //valore : dato da salvare nella tabella
        $book = Book::create([
            'title' => $request->title,
            'plot' => $request->plot,
            'price' => $request->price,
            'pages' => $request->pages,
            // 'topolino'=>'ti buco il sito'
        ]);
        // dd($book);
        return redirect()->route('homepage')->with('success', 'Libro creato');
    }
}
