{{--@extends('layouts.app')

@section('content')--}}
<div>
    <h1>Modifier une recette</h1>
    <form action="{{ route('recettes.update', $recette) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titre</label>
            <input value={{ $recette->title }} type="text" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $recette->description }}</textarea>
        </div>
        <button type="submit">Sauvegarder</button>
    </form>
</div>
{{--@endsection--}}
