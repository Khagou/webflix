@extends('layouts.base')

@section('content')
    <h1>Films</h1>

    @foreach ($movies as $movie)
        
   
    <div>
        <a href="/exercice/movie-view/{{$movie->id}}">{{$movie->title}}</a>
    </div>

    @endforeach
@endsection