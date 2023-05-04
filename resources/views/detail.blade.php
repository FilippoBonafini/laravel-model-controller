<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
    <h1>{{ $movie -> title}}</h1>
    <h2>info:</h2>
    <ul>
        <li>Titolo originale: {{$movie -> original_title}}</li>
        <li>Nazionalità: {{$movie -> nationality}}</li>
        <li>Data: {{$movie -> date}}</li>
        <li>Voto: {{$movie -> vote}}</li>
    </ul>
    <a href="/">Indietro</a>
    </body>
</html>
