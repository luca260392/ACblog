<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Qui inseriamo gli articoli manualmente
        // Ogni Article::create rappresenta un nuovo articolo
        Article::create([
            // Il titolo che apparirà nella pagina
            'title' => 'Assassin\'s Creed Mirage: Recensione',

            // Il contenuto dell'articolo
            'body' => 'Il contenuto del tuo articolo qui...',

            // La categoria dell'articolo
            'category' => 'Games',

            // Il percorso dell'immagine nella cartella public
            'image' => '/media/articles/mirage.jpg',

            // La data di pubblicazione (now() è la data attuale)
            'created_at' => now()
        ]);
    }
}

// Ogni volta che vuoi aggiungere un articolo, aggiungi un nuovo Article::create([...]) nel seeder: php artisan db:seed --class=ArticleSeeder