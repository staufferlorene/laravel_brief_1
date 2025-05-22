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
    <div class="container">
        <h1>Mes recettes</h1>
        <a href="{{ route('recettes.create') }}" class="btn btn-primary mb-3">Créer une recette</a>

        @if (!empty($recettes))
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($recettes as $recette)
                    <tr>
                        <td>{{ $recette->title }}</td>
                        <td>{{ $recette->description }}</td>
                        <td>{{ $recette->status }}</td>
                        <td>
                            <a href="{{ route('recettes.edit', $recette->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('recettes.destroy', $recette->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
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
