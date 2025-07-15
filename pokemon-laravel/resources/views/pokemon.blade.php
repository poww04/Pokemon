<!DOCTYPE html>
<html>
<head>
    <title>Pokémon List</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; text-align: center; }
        .search-box { margin-top: 30px; }
        .search-box input { padding: 10px; width: 300px; border: 1px solid #ccc; }
        .card {
            background: white; padding: 15px; margin: 20px auto;
            width: 300px; border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        img { width: 100px; height: 100px; }
    </style>
</head>
<body>

    <h1>Pokémon Characters</h1>

    <div class="search-box">
        <form method="GET">
            <input type="text" name="search" placeholder="Search by name or type" value="{{ $search ?? '' }}">
        </form>
    </div>

    @forelse($pokemons as $pokemon)
        <div class="card">
            <img src="{{ asset('images/' . $pokemon->image) }}" alt="{{ $pokemon->name }}">
            <h2>{{ $pokemon->name }}</h2>
            <p><strong>Type:</strong> {{ $pokemon->type }}</p>
            <p>{{ $pokemon->description }}</p>
        </div>
    @empty
        <p>No Pokémon found.</p>
    @endforelse

</body>
</html>
