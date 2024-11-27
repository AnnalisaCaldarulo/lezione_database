<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function doveAndiamo()
    {
        return view('doveAndiamo');
    }

    public function profile()
    {
        return view('user.profile');
    }


    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function destroy(User $user)
    {
        // dd($user);
        //! vincolo di integrita' referenziale: prima di cancellare l'utente, TOGLIERE il legame coi libri
        // dd($user->books);
        foreach ($user->books as $book) {
            $book->update([
                'user_id' => NULL
            ]);
            // $book->delete();
        }

        $user->delete();
        // dd('controlla il db');
        return redirect()->route('homepage')->with('goodbye', 'Ci dispiace vederti andare via :(');
    }
}
