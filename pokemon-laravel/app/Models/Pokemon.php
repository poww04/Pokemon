<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons'; // ✅ Tell Laravel the real table name

    protected $fillable = ['name', 'type', 'description', 'image'];
}
