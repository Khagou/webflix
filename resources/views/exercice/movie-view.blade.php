@extends('layouts.base')

@section('content')


<h1>{{$movie->title}}</h1>

<div>
    {{$movie->cover}}
</div>
<div>
    {{$movie->released_at}}
</div>
<div>
    {{$movie->synopsis}}
</div>
  
@endsection