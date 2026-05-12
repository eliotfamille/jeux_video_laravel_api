<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jeus', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); // Nom du Pokémon/Personnage
            $table->string('type');  // Feu, Eau, Plante, etc.
            $table->integer('pv_actuel')->default(100);
            $table->integer('pv_max')->default(100);
            $table->integer('niveau')->default(1);
            $table->integer('score')->default(0); // Ton expérience ou score global
            $table->string('developpeur')->nullable(); // On garde pour le projet 13
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeus');
    }
};
