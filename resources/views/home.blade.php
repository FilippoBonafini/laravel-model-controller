<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
<h1>Ecco i nostri film:</h1>
<ul>
    @foreach ($movie as $movie)
        <li>
            <a href="{{route('detail', $movie->id)}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>
    </body>
</html>