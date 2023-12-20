<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        //uso il metodo all per prendere tutti i dati della tabella
        $movies = Movie::all();

        return view("movies.index", compact("movies"));
    }

    public function show($id)
    {
        $movie = Movie::findorfail($id);
        return view("movies.show", compact("movie"));
    }
}
