<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    // Afficher la liste des jeux (Étape 2 du flux Android plus tard)
    public function index()
    {
        return Jeu::all();
    }

    // Créer un nouveau jeu (Validation demandée par le PDF)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'plateforme' => 'required|string',
            'developpeur' => 'required|string',
            'annee_sortie' => 'required|integer',
            'score' => 'required|integer|min:0|max:100',
        ]);

        return Jeu::create($validated);
    }

    // Afficher un jeu spécifique
    public function show(Jeu $jeu)
    {
        return $jeu;
    }

    // Mettre à jour un jeu
    public function update(Request $request, Jeu $jeu)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'plateforme' => 'required|string',
            'developpeur' => 'required|string',
            'annee_sortie' => 'required|integer',
            'score' => 'required|integer|min:0|max:100',
        ]);

        $jeu->update($validated);
        return $jeu;
    }

    // Supprimer un jeu
    public function destroy(Jeu $jeu)
    {
        $jeu->delete();
        return response()->json(['message' => 'Jeu supprimé']);
    }
}