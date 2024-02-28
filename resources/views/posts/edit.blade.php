@extends('base')

@section('title', 'la page de Connexion')

@section('header')
    <h1>Bienvenue sur la page de Modification d'un Article</h1>
@endsection

@section('main')
    <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" novalidate>
        @csrf
        @method("PUT")

        <label for="name">Entrez le nom </label> 
        <input type="text" name="name" placeholder="le Nom" value="{{ old('name')  ?? $post->name }}"> @error('name') {{ $message }} @enderror
        <br>

        <label for="price">Entrez le prix </label> 
        <input type="number" name="price" price="price" placeholder="le Prix" value="{{ old('price') ?? $post->price }}"> @error('price') {{ $message }} @enderror
        <br>

        <label for="quantity">Entrez le qantity </label> 
        <input type="number" name="quantity" quantity="quantity" placeholder="le Quantiy" value="{{ old('quantity') ?? $post->quantity}}"> @error('quantity') {{ $message }} @enderror
        <br>


        <input type="submit" name="register" value="Modifier">
    </form>
@endsection