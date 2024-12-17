<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ConsoleController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return[
            new Middleware('auth', only: ['create']),
        ];
    }




    public function index()
    {
        $consoles = Console::all();

        return view('console.index', compact('consoles'));
    }




    public function create()
    {
        $games = Game::all();

        return view('console.create', compact('games'));
    }




    public function store(Request $request)
    {
        $console = Console::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'logo' => $request->file('logo')->store('logo-consoles', 'public'),
            'description' => $request->description
        ]);

        $console->games()->attach($request->games);

        return redirect(route('console.index'))->with('message', 'Hai aggiunto una console!');
    }




    public function show(Console $console)
    {
        return view('console.show', compact('console'));
    }




    public function edit(Console $console)
    {
        return view('console.edit', compact('console'));
    }




    public function update(Request $request, Console $console)
    {
        $console->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'logo' => $request->file('logo') ? $request->file('logo')->store('logo-consoles', 'public') : $console->logo,
            'description' => $request->description
        ]);

        return redirect(route('console.index'))->with('message', 'Hai aggiornato la console');
    }




    public function destroy(Console $console)
    {
        $console->games()->detach();
        $console->delete();

        return redirect(route('console.index'))->with('message', 'Hai eliminato la console');
    }
}
