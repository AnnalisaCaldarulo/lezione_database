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

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
}
