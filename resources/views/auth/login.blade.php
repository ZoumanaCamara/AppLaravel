@extends('base')

@section('title', 'la page de Connexion')

@section('header')
    <h1>Bienvenue sur la page de Connexion</h1>
@endsection

@section('main')
    <form action="/login" method="POST" novalidate>
        @csrf
        
        <label for="email">Entrez votre email </label> 
        <input type="email" name="email" placeholder="Votre email" value="{{ old('email') }}"> @error('email') {{ $message }} @enderror

        <br>

        
        <label for="password">Entrez votre mot de passe </label> 
        <input type="password" name="password" placeholder="Votre mot de passe" > @error('password') {{ $message }} @enderror
        <br>


        <input type="submit" name="register" value="Connexion">
    </form>
@endsection