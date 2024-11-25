<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookCreateRequest;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function byUser(User $user){

        // return view('book.byUser', compact('user'));
        $books = Book::where('user_id', '=', $user->id)->orderBy('title', 'asc')->get();
        // $books = $user->books;
        return view('book.byUser', compact('books', 'user'));

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
        if($request->has('cover') ){
            $image = $request->file('cover')->store('covers', 'public') ;
        }
        else{
            $image = NULL;
        }

        $book = Book::create([
            'title' => $request->title,
            'plot' => $request->plot,
            'price' => $request->price,
            'pages' => $request->pages,
            //! ternario: se c'è l'immagine salvala altrimenti metti NULL
            // $request->has('cover') ? $request->file('cover')->store('covers', 'public') : NULL
            'cover' => $image,
            'user_id'=> Auth::user()->id
        ]);


        // dd($book);
        return redirect()->route('homepage')->with('success', 'Libro creato');
    }
}
