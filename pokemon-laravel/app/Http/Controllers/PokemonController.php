<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $pokemons = Pokemon::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('type', 'like', "%{$search}%");
        })->get();

        return view('pokemon', compact('pokemons', 'search'));
    }
}
