<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Director;
use App\Category;

class TestController extends Controller
{
    public function index() {
        
        /*$myDirector = Film::find(1)->director;
        $films = Director::find(1)->films;*/

        //$films = Category::find(1)->films;

        return view('test', ['xd' => 1]);
    }
}
