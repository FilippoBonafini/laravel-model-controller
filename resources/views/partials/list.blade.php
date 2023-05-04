<h1>Ecco i nostri film:</h1>
<ul class="list-group">
    @foreach ($movie_list as $movie)
        <li class="list-group-item list-group-item-dark {{ Str::endsWith(url()->current(),'detail/'.$movie->id) ? 'active' : '' }}">
            <a class="text-decoration-none fs-5 {{ Str::endsWith(url()->current(),'detail/'.$movie->id) ? 'text-light' : '' }}" href="{{route('detail', $movie->id)}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>