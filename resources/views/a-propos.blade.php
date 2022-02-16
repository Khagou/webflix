@extends('.layouts/base')

@section('content')
<h1>A propos</h1>
<ul>
    @foreach ($teams as $team)
        <li><a href="/about-show/$user"></a>{{ $team }}</li>
    @endforeach
</ul>
@endsection