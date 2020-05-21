<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class WelcomeController extends Controller
{
    public function index() {

        $popular = Film::orderBy('borrowed', 'desc')->take(7)->get();
        $recent = Film::latest()->take(10)->get();
        return view('welcome', ['popular' => $popular, 'recent' => $recent]);
    }
}
