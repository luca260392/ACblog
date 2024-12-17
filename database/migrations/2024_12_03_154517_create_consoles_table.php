<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consoles', function (Blueprint $table) {
            // Identificatore univoco della console
            $table->id();

            // Informazioni della console
            $table->string('name');
            $table->string('brand');
            $table->string('logo');
            $table->text('description');

            // Timestamp di creazione e aggiornamento
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consoles');
    }
};