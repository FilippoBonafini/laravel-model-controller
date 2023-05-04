<h1>Ecco i nostri film:</h1>
<ul class="list-group">
    @foreach ($movie_list as $movie)
        <li class="list-group-item list-group-item-dark">
            <a class="text-decoration-none fs-5" href="{{route('detail', $movie->id)}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>