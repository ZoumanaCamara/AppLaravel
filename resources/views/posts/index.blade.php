@extends('base')

@section('title', 'la page de Categorie')

@section('header')
    <h1>Bienvenue sur la page des Articles</h1>
@endsection

@section('main')

<h4><a href="{{ route('posts.create') }}">Creer un nouveau article</a></h4>
<style>
    table {
        border-collapse: collapse; 
    }
    td, th {
        padding: 10px; 
        border: 1px solid #000; 
    }
</style>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            <tr>
                <td> {{$post->name}} </td>
                <td> {{$post->price}} </td>
                <td> {{$post->quantity}} </td>
                <td>
                    <a href="{{ route('posts.edit', ['post' => $post]) }}">Modifier</a>
                    <a href="{{ route('posts.destroy', ['post' => $post]) }}">Supprimer</a>
                </td>
            </tr>
        @empty

        <h4>Aucun Article Pour le moment</h4>
            
        @endforelse
    </tbody>
</table>

    
@endsection