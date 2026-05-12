<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    // Récupérer tous les personnages/sauvegardes
    public function index()
    {
        return Jeu::all();
    }

    // Créer un nouveau personnage (Nouvelle partie)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'type' => 'required|string',
            'pv_actuel' => 'required|integer',
            'pv_max' => 'required|integer',
            'niveau' => 'required|integer',
            'score' => 'required|integer',
        ]);

        return Jeu::create($validated);
    }

    // Voir les détails d'un personnage précis
    public function show(Jeu $jeu)
    {
        return $jeu;
    }

    // Sauvegarder l'état après un combat (Mise à jour des PV et du Score)
    public function update(Request $request, Jeu $jeu)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'type' => 'required|string',
            'pv_actuel' => 'required|integer',
            'pv_max' => 'required|integer',
            'niveau' => 'required|integer',
            'score' => 'required|integer',
        ]);

        $jeu->update($validated);
        return $jeu;
    }

    // Supprimer une sauvegarde
    public function destroy(Jeu $jeu)
    {
        $jeu->delete();
        return response()->json(['message' => 'Sauvegarde supprimée']);
    }
}