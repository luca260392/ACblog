<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsoleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');

Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
Route::get('/game/index', [GameController::class, 'index'])->name('game.index');
Route::get('/game/show/{game}', [GameController::class, 'show'])->name('game.show');
Route::get('/game/edit/{game}', [GameController::class, 'edit'])->name('game.edit');
Route::put('/game/update/{game}', [GameController::class, 'update'])->name('game.update');
Route::delete('/game/destroy/{game}', [GameController::class, 'destroy'])->name('game.destroy');

Route::get('/console/index', [ConsoleController::class, 'index'])->name('console.index');
Route::get('/console/create', [ConsoleController::class, 'create'])->name('console.create');
Route::post('/console/store', [ConsoleController::class, 'store'])->name('console.store');
Route::get('/console/show/{console}', [ConsoleController::class, 'show'])->name('console.show');
Route::get('/console/edit/{console}', [ConsoleController::class, 'edit'])->name('console.edit');
Route::put('/console/update/{console}', [ConsoleController::class, 'update'])->name('console.update');
Route::delete('/console/destroy/{console}', [ConsoleController::class, 'destroy'])->name('console.destroy');

Route::get('/news', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/news/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');