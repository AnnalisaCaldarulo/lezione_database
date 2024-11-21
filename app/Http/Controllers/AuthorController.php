<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AuthorController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // !ASSEGNA A TUTTE LE FUNZIONI DEL CONTROLLER IL MIDDLEWARE AUTH
            // 'auth',
            // !ASSEGNA A TUTTE LE FUNZIONI DEL CONTROLLER IL MIDDLEWARE AUTH tranne show e index
            new Middleware('auth', except: ['show', 'index']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('surname')->get();
        return view('author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create([
            'name' => $request->name,
            'surname' => $request->input('surname'),
            'bio' => $request->bio,
            'pic' => $request->has('pic') ? $request->file('pic')->store('pics', 'public') : NULL
        ]);
        // dd('controlla il db');
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     * ! due classi request diverse per create e update
     */
    public function update(Request $request, Author $author)
    {
        // modificare il singolo oggetto $author
        $author->update([
            'name' => $request->name,
            'surname' => $request->input('surname'),
            'bio' => $request->bio,
        ]);
        if ($request->has('pic')) {
            $author->update([
                'pic' => $request->file('pic')->store('pics', 'public')
            ]);
        }
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author.index');

    }
}
