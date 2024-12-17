<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // Definiamo quali campi possono essere riempiti in massa; è importante per la sicurezza e per il seeding
    protected $fillable = [
        'title', //
        'slug',
        'body',
        'category',
        'image',
        'created_at'
    ];




    // Genera automaticamente lo slug dal titolo
    protected static function boot()
    {
        parent::boot();

        // Genera automaticamente lo slug dal titolo
        // Es: "Il Mio Articolo" diventa "il-mio-articolo"
        static::creating(function ($article) {
            $article->slug = str()->slug($article->title);
        });
    }
}
