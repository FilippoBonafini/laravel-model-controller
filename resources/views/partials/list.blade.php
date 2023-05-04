<h1>Ecco i nostri film:</h1>
<ul>
    @foreach ($movie_list as $movie)
        <li>
            <a href="{{route('detail', $movie->id)}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>