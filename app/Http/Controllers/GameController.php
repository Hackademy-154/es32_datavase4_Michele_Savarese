<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\BoardgameCreateRequest;

class GameController extends Controller
{
    //
    public function create()
    {
        return view('boardgame.create');
    }

    public function library(BoardgameCreateRequest $request)
    {

        // dd($request->file('box'));
        $boardgame = Game::create(
            [
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'players' => $request->input('players'),
                'instructor' => $request->input('instructor'),
                'imgbox' => $request->has('box') ? $request->file('box')->store('box', 'public') : '/media/default.jpg',
            ]
        );
        // dd('controlla il database');
        return redirect()->route('welcome')->with('success', 'Gioco da tavolo inserito con successo');
    }
}
