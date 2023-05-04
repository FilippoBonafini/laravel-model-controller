<h1>Ecco i nostri film:</h1>
<ul class="list-group">
    
    @foreach ($movie_list as $movie)
    {{-- {{dd(urlencode($movie->title))}} --}}
        <li class="list-group-item list-group-item-dark {{ Str::endsWith(url()->current(), urlencode($movie->title)) ? 'active' : '' }}">
            <a class="text-decoration-none fs-5 {{ Str::endsWith(url()->current(),urlencode($movie->title)) ? 'text-light' : '' }}" href="{{route('detail', ['id' => $movie->id, 'title' => urlencode($movie->title)])}}">{{$movie -> title}}</a>
        </li>
    @endforeach
</ul>