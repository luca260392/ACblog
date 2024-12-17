<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('games', function (Blueprint $table) {
            // Aggiungiamo la colonna user_id dopo il titolo
            // nullable() permette valori null nel caso un gioco non sia associato a un utente
            $table->unsignedBigInteger('user_id')->after('title')->nullable();

            // Creiamo la relazione con la tabella users
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null'); // Se un utente viene eliminato, manteniamo il gioco ma settiamo user_id a null
        });
    }

    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            // Rimuoviamo prima il vincolo di chiave esterna
            $table->dropForeign(['user_id']);
            // Poi rimuoviamo la colonna
            $table->dropColumn('user_id');
        });
    }
};