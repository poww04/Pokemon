<?php
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PokemonController::class, 'index']);
