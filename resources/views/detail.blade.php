
@extends('layouts.app')

@section('page.title')
{{ $movie -> title}}
@endsection

@section('page.main')
<h1>{{ $movie -> title}}</h1>
<h3>Titolo originale: {{$movie -> original_title}}</h3>
<h4>Nazionalità: {{$movie -> nationality}}</h4>
<p>Data: {{$movie -> date}}</p>
<p>Voto: {{$movie -> vote}}</p>
@endsection