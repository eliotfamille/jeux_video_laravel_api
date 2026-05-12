<?php

namespace Database\Seeders;

use App\Models\Jeu;
use Illuminate\Database\Seeder;

class JeuSeeder extends Seeder
{
    public function run(): void
    {
        // On crée les jeux directement un par un pour éviter les erreurs de variables
        Jeu::create([
            'titre' => 'God of War',
            'plateforme' => 'PlayStation 5',
            'developpeur' => 'Santa Monica Studio',
            'annee_sortie' => 2022,
            'score' => 94,
            'image' => 'God_of_War.jpg'
        ]);

        Jeu::create([
            'titre' => 'Naruto Ultimate Ninja Storm',
            'plateforme' => 'Multiplateforme',
            'developpeur' => 'CyberConnect2',
            'annee_sortie' => 2016,
            'score' => 85,
            'image' => 'Naruto.jpg'
        ]);

        Jeu::create([
            'titre' => 'Barbie Project Friendship',
            'plateforme' => 'Nintendo Switch',
            'developpeur' => 'Mattel Solutions',
            'annee_sortie' => 2024,
            'score' => 70,
            'image' => 'Barbi.jpg'
        ]);

        Jeu::create([
            'titre' => 'Dark Souls',
            'plateforme' => 'PC',
            'developpeur' => 'FromSoftware',
            'annee_sortie' => 2011,
            'score' => 91,
            'image' => 'Dark_Souls.jpg'
        ]);

        Jeu::create([
            'titre' => 'Genshin Impact',
            'plateforme' => 'Android / PC',
            'developpeur' => 'HoYoverse',
            'annee_sortie' => 2020,
            'score' => 82,
            'image' => 'genshin-impact.jpg'
        ]);
    }
}