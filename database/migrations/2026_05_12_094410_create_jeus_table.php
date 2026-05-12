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
            $table->string('titre');
            $table->string('plateforme');
            $table->string('developpeur');
            $table->integer('annee_sortie');
            $table->integer('score'); // 0 à 100
            $table->string('image')->nullable(); // Stocke le chemin de l'image
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
