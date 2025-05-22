{{--@extends('layouts.app')

@section('content')--}}
    <div class="container">
        <h1>Créer une recette</h1>
        <form action="{{ route('recettes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Sauvegarder</button>
        </form>
    </div>
{{--@endsection--}}
