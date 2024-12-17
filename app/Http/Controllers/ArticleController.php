<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Mostra la lista di tutti gli articoli
    public function index()
    {
        // Recupera gli articoli più recenti prima
        // mostra 9 articoli per pagina
        $articles = Article::orderBy('created_at', 'desc')
                          ->paginate(9);

        // Passa gli articoli alla vista
        return view('articles.index', compact('articles'));
    }




    // Mostra un singolo articolo
    public function show(Article $article)
    {
        // Laravel fa automaticamente il retrieve dell'articolo grazie al Route Model Binding
        return view('articles.show', compact('article'));
    }
}
