<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logincontroller extends Controller
{

    public function Selectaccount(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users,email|max:255|min:6|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $token = $user->createToken('my-app-token')->plainTextToken;

            Session::put('user_email', $user->email);
            return redirect('/index')->with('email', $user->email);
        }

        return back()->withErrors([
            'password' => 'Invalid email or password. Please try again.',
        ])->withInput($request->only('email'));
    }

    public function logout()
    {

        Session::forget('user_email');


        Auth::logout();


        return redirect('/login');
    }
}
