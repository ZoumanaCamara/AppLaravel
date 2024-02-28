@extends('base')

@section('title', 'la page de Categorie')

@section('header')
    <h1>Bienvenue sur la page categories</h1>
@endsection

@section('main')

<h4><a href="{{ route('categories.create') }}">Creer une nouvelle categorie</a></h4>
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
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
            <tr>
                <td> {{$category->name}} </td>
                <td>
                    <a href="{{ route('categories.edit', ['category' => $category]) }}">Modifier</a>
                    <a href="{{ route('categories.destroy', ['category' => $category]) }}">Supprimer</a>
                </td>
            </tr>
        @empty

        <h4>Aucun Category Pour le moment</h4>
            
        @endforelse
    </tbody>
</table>
    
@endsection