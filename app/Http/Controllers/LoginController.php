<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function userlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            //If login succeeds
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        //Logout and regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
