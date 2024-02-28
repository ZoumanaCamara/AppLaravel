@extends('base')

@section('title', 'la page de Connexion')

@section('header')
    <h1>Bienvenue sur la page de modification d'une categorie</h1>
@endsection

@section('main')
    <form action="{{ route('categories.update', ['category' => $category]) }}" method="POST" novalidate>
        @csrf
        @method('PATCH')
        <label for="name">Entrez le nom </label> 
        <input type="text" name="name" placeholder="le Nom" value="{{ old('name') ?? $category->name }}"> @error('name') {{ $message }} @enderror
        <br>

        <input type="submit" name="update" value="Modifier">
    </form>
@endsection