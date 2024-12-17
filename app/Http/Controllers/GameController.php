<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class GameController extends Controller implements HasMiddleware
{
    // tutte le funzioni presenti dopo middleware sono per gli utenti loggati
    public static function middleware()
    {
        return[
            // applica il middleware solo alla vista create
            // new Middleware('auth', only: ['create']),

            // applica middleware a tutte le funzioni eccetto index e show
            new Middleware('auth', except: ['index', 'show']),
        ];
    }


    // aggiunta pagina form di creazione
    public function create(){
        return view('game.create');
    }



    // salvare dati nel db
    public function store(GameRequest $request){
        // protected mass assignement
        $game = Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'cover' => $request->file('cover')->store('covers-games', 'public'),
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('homepage'))->with('message', 'Hai inserito correttamente il gioco!');
    }



    // lista gioci
    public function index(){
        $games = Game::all();

        return view('game.index', compact('games'));
    }



    // dettaglio giochi
    public function show(Game $game){
        return view('game.show', compact('game'));
    }



    // form di modifica
    public function edit(Game $game){
        return view('game.edit', compact('game'));
    }



    // salvare dati db
    public function update(Request $request, Game $game){
        $game->update([
            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'cover' => $request->file('cover') ? $request->file('cover')->store('covers-games', 'public') : $game->cover,
            'description' => $request->description
        ]);

        return redirect(route('game.index'))->with('message', 'Hai modificato il gioco');
    }



    // cancellare dati db
    public function destroy(Game $game){
        $game->delete();

        return redirect(route('game.index'))->with('message', 'Hai cancellato il gioco');
    }
}
