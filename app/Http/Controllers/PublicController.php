<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\BoardGame;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        $boardgames = Game::all(); //!collezione di libri, collezione è un nome tecnico
        return view('welcome', compact('boardgames'));
    }
public function profile()
{
    return view('profile');
}


    //
}
