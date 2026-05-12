<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $fillable = ['titre', 'plateforme', 'developpeur', 'annee_sortie', 'score', 'image'];
}