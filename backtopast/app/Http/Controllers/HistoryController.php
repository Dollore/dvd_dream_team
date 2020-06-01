<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Borrowing;

class HistoryController extends Controller
{
    public function index() {
        $myId = Auth::user()->id_user;
        $date = Carbon::today()->subDays(7);

        $afterDeadline = Borrowing::where('user_id', $myId)
            ->where('returned', false)
            ->where('created_at', '<', date($date))->get();

        $borrowings = Borrowing::where('user_id', $myId)
            ->where('created_at', '>=', date($date))
            ->get();

        $borrowings = $borrowings->merge(Borrowing::where('user_id', $myId)
        ->where('returned', true)
        ->get());


        $afterDeadline = $afterDeadline->sortBy('created_at');
        
        $borrowings = $borrowings->sort(function ($a, $b) {
            
            if ($a->returned != $b->returned) {
                return $a->returned > $b->returned;
            }

            return $a->created_at < $b->created_at;
        });

        return view('history', ['borrowings' => $borrowings, 'afterDeadline' => $afterDeadline]);
    }
}
