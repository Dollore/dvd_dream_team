<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function store(Request $request) {
        
        $myId = Auth::user()->id_user;

        DB::table('borrowing')->insert([
            'user_id' => $myId,
            'film_id' => $request->film_id, 
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
            'returned' => false           
        ]);

        DB::table('film')->where('id_film', $request->film_id)->increment('borrowed');
        
        return redirect()->route('history');
    }
}
