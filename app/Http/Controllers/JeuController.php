<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    public function index() { 
        return Jeu::all(); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Validation d'origine (PDF)
            'titre' => 'required|string|max:255',
            'plateforme' => 'required|string|max:100',
            'developpeur' => 'required|string',
            'annee_sortie' => 'required|integer|min:1970',
            'score' => 'required|integer|min:0|max:100',
            // Validation des ajouts (Jeu)
            'type' => 'string',
            'pv_actuel' => 'integer',
            'pv_max' => 'integer',
            'niveau' => 'integer',
        ]);

        return Jeu::create($validated);
    }

    public function show(Jeu $jeu) { 
        return $jeu; 
    }

    public function update(Request $request, Jeu $jeu)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'plateforme' => 'required|string',
            'developpeur' => 'required|string',
            'annee_sortie' => 'required|integer',
            'score' => 'required|integer|min:0|max:100',
            'pv_actuel' => 'integer',
            'niveau' => 'integer',
        ]);

        $jeu->update($validated);
        return $jeu;
    }

    public function destroy(Jeu $jeu)
    {
        $jeu->delete();
        return response()->json(['message' => 'Supprimé']);
    }
}