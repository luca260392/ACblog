<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('console_game', function (Blueprint $table) {
            // Identificatore univoco della relazione
            $table->id();

            // Relazioni con le tabelle consoles e games
            // constrained() userà automaticamente il nome della tabella al plurale
            // onDelete('cascade') eliminerà la relazione se viene eliminato il gioco o la console
            $table->foreignId('console_id')->constrained()->onDelete('cascade');
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('console_game');
    }
};