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
        $movie = Movie::all();

        return view('home', compact('movie'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('detail', compact('movie'));
    }
}
