@extends('base')

@section('title', 'la page Inscription')

@section('header')
    <h1>Bienvenue sur la page d'inscription</h1>
@endsection

@section('main')
    <form action="/register" method="POST" novalidate>
        @csrf
        <label for="name">Entrez votre nom </label> 
        <input type="text" name="name" placeholder="Votre nom" value="{{ old('name') }}"> @error('name') {{ $message }} @enderror

        <br>
        
        <label for="email">Entrez votre email </label> 
        <input type="email" name="email" placeholder="Votre email" value="{{ old('email') }}"> @error('email') {{ $message }} @enderror

        <br>

        
        <label for="password">Entrez votre mot de passe </label> 
        <input type="password" name="password" placeholder="Votre mot de passe" > @error('password') {{ $message }} @enderror

        <br>

        <label for="password_confirmation">Entrez votre de confirmation </label> 
        <input type="password" name="password_confirmation" placeholder="Votre mot de passe de confirmation"> @error('password_confirmation') {{ $message }} @enderror

        <br><br>


        <input type="submit" name="register" value="Inscription">
    </form>
@endsection