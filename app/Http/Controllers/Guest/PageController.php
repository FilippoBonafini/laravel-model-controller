<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;
use Attribute;

class PageController extends Controller
{
    public function index()
    {
        $movie_list = Movie::all();

        return view('home', compact('movie_list'));
    }

    public function show($id, $title)
    {
        $movie_list = Movie::all();
        $movie = Movie::findOrFail($id);

        return view('detail', compact('movie'), compact('movie_list'));
    }
}
