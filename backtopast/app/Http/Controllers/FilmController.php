<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function show($id_film) {
        $clickedFilm = Film::findOrFail($id_film);
        $categories = $clickedFilm->categories;
        $director = $clickedFilm->director;
        $actors = $clickedFilm->actors;

        return view('film_page', ['film' => $clickedFilm, 'categories' => $categories, 'director' => $director, 'actors' => $actors]);
    }
}
