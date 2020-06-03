<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Borrowing;

class DeleteController extends Controller
{
    public function index(Request $request) {
        $myId = Auth::user()->id_user;

        $notReturned = Borrowing::where('user_id', $myId)
            ->where('returned', false)->get();

        if (!$notReturned->isEmpty()) {
            $request->session()->put('notDelete', true);
            return redirect()->route('profile');
        }

        $me = User::findOrFail($myId);
        $me->delete();

        return redirect()->route('welcome');
    }
}
