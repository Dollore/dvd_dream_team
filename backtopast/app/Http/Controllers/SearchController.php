<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Category;
use App\Director;

class SearchController extends Controller
{
    public function index(Request $request) {
        
        $query = $request->input('search');

        // search for titles
        $foundFilms = Film::where('title', 'like', "%{$query}%")->get();
        
        // search for categories
        $foundByCategory = Category::where('category_name', 'like', "%{$query}%")->get();
        foreach ($foundByCategory as $category) {
            $films = $category->films;
            $foundFilms = $foundFilms->merge($films);
        }

        // search for directors
        $foundByDirector = Director::where('director_name', 'like', "%{$query}%")->get();    
        foreach ($foundByDirector as $director) {
            $films = $director->films;
            $foundFilms = $foundFilms->merge($films);
        }

        // search for premiere year
        $foundByPremiereYear = Film::where('premiere_year', 'like', "%{$query}%")->get();

        $foundFilms = $foundFilms->merge($foundByPremiereYear);

        return view('found', ['foundFilms' => $foundFilms]);
    }
}
