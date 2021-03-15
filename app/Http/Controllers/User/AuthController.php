<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('User.auth.login');
    }

    public function Dologin(Request $req)
    {
        if (Auth::guard('user')->attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('merchant.index');
        } else {
            return back()->with('info', 'Email / Password kamu salah.');
        }
    }
}
