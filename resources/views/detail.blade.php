
@extends('layouts.app')

@section('page.title')
{{ $movie -> title}}
@endsection

@section('page.main')
<h1>{{ $movie -> title}}</h1>
<h2>info:</h2>
<ul>
    <li>Titolo originale: {{$movie -> original_title}}</li>
    <li>Nazionalità: {{$movie -> nationality}}</li>
    <li>Data: {{$movie -> date}}</li>
    <li>Voto: {{$movie -> vote}}</li>
</ul>
@endsection