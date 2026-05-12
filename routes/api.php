<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JeuController;

// Cette ligne crée automatiquement toutes les routes CRUD pour ton projet de Jeux Vidéo
Route::apiResource('jeux', JeuController::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
