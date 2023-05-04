<h1>Ecco i nostri film:</h1>
<ul class="list-group">
    @foreach ($movie_list as $movie)
        <li class="list-group-item list-group-item-dark {{ Str::endsWith(url()->current(), $movie->title) ? 'active' : '' }}">
            <a class="text-decoration-none fs-5 {{ Str::endsWith(url()->current(),$movie->title) ? 'text-light' : '' }}" href="{{route('detail', ['id' => $movie->id, 'title' => $movie->title])}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>