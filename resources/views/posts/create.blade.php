@extends('base')

@section('title', 'la page de Connexion')

@section('header')
    <h1>Bienvenue sur la page de create de category</h1>
@endsection

@section('main')
    <form action="{{ route('posts.store') }}" method="POST" novalidate>
        @csrf
        
        <label for="name">Entrez le nom </label> 
        <input type="text" name="name" placeholder="le Nom" value="{{ old('name') }}"> @error('name') {{ $message }} @enderror
        <br>

        <label for="price">Entrez le prix </label> 
        <input type="number" name="price" price="price" placeholder="le Prix" value="{{ old('price') }}"> @error('price') {{ $message }} @enderror
        <br>

        <label for="quantity">Entrez le qantity </label> 
        <input type="number" name="quantity" quantity="quantity" placeholder="le Quantiy" value="{{ old('quantity') }}"> @error('quantity') {{ $message }} @enderror
        <br>


        <input type="submit" name="register" value="Creation">
    </form>
@endsection