<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UpdateController extends Controller
{
    public function username() {
        return view('update_username');
    }

    public function email() {
        return view('update_email');
    }

    public function password() {
        return view('update_password');
    }

    public function editUsername(Request $request) {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
        
        $myId = Auth::user()->id_user;
        DB::table('users')
                ->where('id_user', $myId)
                ->update(['username' => $data['username']]);

        return redirect('/profile');
    }

    public function editEmail(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
        ]);

        $me = Auth::user();
        DB::table('users')
                ->where('id_user', $me->id_user)
                ->update(['email' => $data['email'], 'email_verified_at' => null]);

        $me->sendEmailVerificationNotification();

        return redirect('/profile');
    }

    public function editPassword(Request $request) {
        $data = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed', 'unique:users'],
        ]);

        $myId = Auth::user()->id_user;
        DB::table('users')
                ->where('id_user', $myId)
                ->update(['password' =>  Hash::make($data['password']),]);

        return redirect('/profile');
    }
}
