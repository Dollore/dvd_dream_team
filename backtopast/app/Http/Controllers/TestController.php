<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Director;
use App\Category;

class TestController extends Controller
{
    public function index() {
        
        $myCat = Category::find(2);
        $myFilms = $myCat->films;

        return view('test', ['xd' => $myFilms]);
    }
}
