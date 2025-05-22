{{--<x-layout>
    <h1>Mes recettes</h1>

    @foreach ($recettes as $key => $recette)

        <p>
            <a href="{{ route('recettes.show', $key) }}">
            {{ $recette['title'] }}</a>
        </p>

    @endforeach

</x-layout>--}}

{{--@extends('layouts.app'--}}
{{--@section('content')--}}
    <div>
        <h1>Mes recettes</h1>
        <button><a href="{{ route('recettes.create') }}">Créer une recette</a></button>

        @if (!empty($recettes))
            <table>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($recettes as $recette)
                    <tr>
                        <td>{{ $recette->title }}</td>
                        <td>{{ $recette->description }}</td>
                        <td>
                            <button><a href="{{ route('recettes.edit', $recette) }}">Modifier</a></button>
                            <form action="{{ route('recettes.destroy', $recette->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Il n'y a pas de recette.</p>
        @endif
    </div>
{{--@endsection--}}
