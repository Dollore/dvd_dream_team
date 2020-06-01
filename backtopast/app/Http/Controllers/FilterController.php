<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Film;
use App\Category;
use App\Director;

class FilterController extends Controller
{
    public function index() {
        return view('filter');
    }

    public function filter(Request $request) {

        $director = null;
        $category = null;
        $startDate = 0;
        $endDate = 100000;

        if ($request->filled('director')) {
            $director = $request->input('director');
            $director = Director::where('director_name', $director)->get()->first();
        }

        if ($request->filled('category')) {
            $category = $request->input('category');
            $category = Category::where('category_name', $category)->get()->first();
        }

        if ($request->filled('start_date')) {
            $data = $request->validate([
                'start_date' => ['integer'],
            ]);
            $startDate = $request->input('start_date');
        }

        if ($request->filled('end_date')) {
            $data = $request->validate([
                'start_date' => ['integer'],
            ]);
            $endDate = $request->input('end_date');
        }

        $foundFilms = DB::table('film')
            ->whereBetween('premiere_year', [$startDate, $endDate])
            ->when($director, function ($query, $director) {
                return $query->where('director_id', $director->id_director);
            })
            ->when($category, function ($query, $category) {
                return $query->join('category_film', function ($query) use ($category) {
                    $query->on('film.id_film', '=', 'category_film.film_id')
                         ->where('category_film.category_id', '=', $category->id_category);
                });
            })
            ->get();
        
        return view('found', ['foundFilms' => $foundFilms]);
    }
}
