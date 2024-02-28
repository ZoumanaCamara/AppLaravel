@extends('base')

@section('title', 'la page de Connexion')

@section('header')
    <h1>Bienvenue sur la page de create de category</h1>
@endsection

@section('main')
    <form action="{{ route('categories.store') }}" method="POST" novalidate>
        @csrf
        
        <label for="name">Entrez le nom </label> 
        <input type="text" name="name" placeholder="le Nom" value="{{ old('name') }}"> @error('name') {{ $message }} @enderror
        <br>

        <input type="submit" name="register" value="Creation">
    </form>
@endsection