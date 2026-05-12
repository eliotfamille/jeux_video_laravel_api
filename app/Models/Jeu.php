<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $fillable = [
        'titre', 'plateforme', 'developpeur', 'annee_sortie', 'score', 
        'type', 'pv_actuel', 'pv_max', 'niveau'
    ];
}