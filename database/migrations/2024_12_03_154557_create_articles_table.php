<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            // Identificatore univoco dell'articolo
            $table->id();

            // Informazioni dell'articolo
            $table->string('title');
            $table->string('slug')->unique(); // URL-friendly, deve essere unico
            $table->text('body');            // Contenuto dell'articolo
            $table->string('category');      // Categoria (Games, Reviews, etc.)
            $table->string('image')->nullable(); // Immagine opzionale

            // Timestamp di creazione e aggiornamento
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};