<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $notDelete = false;
        if ($request->session()->has('notDelete')) {
            $notDelete = $request->session()->pull('notDelete');
        }

        return view('user_profile', ['user' => $user, 'notDelete' => $notDelete]);
    }
}
