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
            // Champs d'origine du PDF
            $table->string('titre');
            $table->string('plateforme');
            $table->string('developpeur');
            $table->integer('annee_sortie');
            $table->integer('score'); 

            // AJOUTS pour le mode Pokémon
            $table->string('type')->default('Normal'); // Feu, Eau, etc.
            $table->integer('pv_actuel')->default(100);
            $table->integer('pv_max')->default(100);
            $table->integer('niveau')->default(1);
            
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
