@extends('layouts.base')

@section('content')
<h1>Catégorie</h1>
    <a href="/exercice/categories/creer">Créer une catégorie</a>

    <ul>
        @foreach ($categories as $categorie)

            <li><a href="/exercice/categories/{{$categorie->id}}">{{$categorie->name}}</a></li>
        
        @endforeach
    </ul>
@endsection