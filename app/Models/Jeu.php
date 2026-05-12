<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $fillable = [
        'titre', 
        'type', 
        'pv_actuel', 
        'pv_max', 
        'niveau', 
        'score'
    ];
}