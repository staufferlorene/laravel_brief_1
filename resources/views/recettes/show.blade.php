<x-layout>
    <h1>{{ $recette['title'] }}</h1>
    <p>{{ $recette['description'] }}</p>

    @foreach ($recette['ingredients'] as $ingredient)
        <p>{{$ingredient}}</p>
    @endforeach

    <p>{{ $recette['instructions'] }}</p>

</x-layout>
