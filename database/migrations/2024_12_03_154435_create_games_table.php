<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            // Identificatore univoco del gioco
            $table->id();

            // Informazioni base del gioco
            $table->string('title');
            $table->string('producer');
            $table->text('description');
            $table->float('price');
            $table->string('cover')->nullable();

            // Timestamp di creazione e aggiornamento
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};