<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Borrowing;
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
    public function index(Request $request)
    {
        $popular = Film::orderBy('borrowed', 'desc')->take(14)->get();
        $recent = Film::latest()->take(14)->get();

        $myId = Auth::user()->id_user;
        $date = Carbon::today()->subDays(7);

        if (!$request->session()->has('checkPopup')) {
            $afterDeadline = Borrowing::where('user_id', $myId)
            ->where('returned', false)
            ->where('created_at', '<', date($date))->get();

            $request->session()->put('showPopup', !$afterDeadline->isEmpty());
            $request->session()->put('checkPopup', true);
        }
        

        return view('welcome', ['popular' => $popular, 'recent' => $recent]);
    }
}
