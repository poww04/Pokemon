<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pokemons')->insert([
            ['name' => 'Pikachu', 'type' => 'Electric', 'description' => 'Stores electricity in cheeks.', 'image' => 'pikachu.png'],
            ['name' => 'Charizard', 'type' => 'Fire/Flying', 'description' => 'Breathes fire hot enough to melt boulders.', 'image' => 'charizard.png'],
            ['name' => 'Bulbasaur', 'type' => 'Grass/Poison', 'description' => 'A bulb on its back blooms.', 'image' => 'bulbasaur.png'],
            ['name' => 'Squirtle', 'type' => 'Water', 'description' => 'Hides in its shell to protect itself.', 'image' => 'squirtle.png'],
            ['name' => 'Jigglypuff', 'type' => 'Normal/Fairy', 'description' => 'Sings lullabies to put enemies to sleep.', 'image' => 'jigglypuff.png'],
            ['name' => 'Meowth', 'type' => 'Normal', 'description' => 'Loves shiny coins.', 'image' => 'meowth.png'],
            ['name' => 'Psyduck', 'type' => 'Water', 'description' => 'Suffers from headaches with psychic powers.', 'image' => 'psyduck.png'],
            ['name' => 'Machop', 'type' => 'Fighting', 'description' => 'Loves to train and lift heavy things.', 'image' => 'machop.png'],
            ['name' => 'Gengar', 'type' => 'Ghost/Poison', 'description' => 'Hides in shadows and laughs.', 'image' => 'gengar.png'],
            ['name' => 'Eevee', 'type' => 'Normal', 'description' => 'Can evolve into many forms.', 'image' => 'eevee.png'],
            ['name' => 'Snorlax', 'type' => 'Normal', 'description' => 'Loves to sleep and eat.', 'image' => 'snorlax.png'],
            ['name' => 'Onix', 'type' => 'Rock/Ground', 'description' => 'Large rock snake.', 'image' => 'onix.png'],
            ['name' => 'Lapras', 'type' => 'Water/Ice', 'description' => 'A gentle sea Pokémon.', 'image' => 'lapras.png'],
            ['name' => 'Magikarp', 'type' => 'Water', 'description' => 'Weak but evolves into something mighty.', 'image' => 'magikarp.png'],
            ['name' => 'Gyarados', 'type' => 'Water/Flying', 'description' => 'Ferocious after evolution.', 'image' => 'gyarados.png'],
            ['name' => 'Dragonite', 'type' => 'Dragon/Flying', 'description' => 'Kind-hearted and powerful.', 'image' => 'dragonite.png'],
            ['name' => 'Mewtwo', 'type' => 'Psychic', 'description' => 'Created by science. Very powerful.', 'image' => 'mewtwo.png'],
            ['name' => 'Mew', 'type' => 'Psychic', 'description' => 'Very rare and playful.', 'image' => 'mew.png'],
            ['name' => 'Pidgey', 'type' => 'Normal/Flying', 'description' => 'Common bird Pokémon.', 'image' => 'pidgey.png'],
            ['name' => 'Rattata', 'type' => 'Normal', 'description' => 'Small and quick.', 'image' => 'rattata.png'],
        ]);
    }
}
