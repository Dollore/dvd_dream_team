<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $popular = Film::orderBy('borrowed', 'desc')->take(7)->get();
        $recent = Film::latest()->take(10)->get();
        return view('welcome', ['popular' => $popular, 'recent' => $recent]);
    }
}
