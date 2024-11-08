<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logincontroller extends Controller
{

    public function Selectaccount(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users,email|max:255|min:6|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
         
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
             // Create a token for the user
            $token = $user->createToken('my-app-token')->plainTextToken;

            // Store the token in a session
            Session::put('user_email', $user->email);
            return redirect('/index')->with('email', $user->email);
        }
         // Redirect back with an error message
        return back()->withErrors([
            'password' => 'Invalid email or password. Please try again.',
        ])->withInput($request->only('email'));
    }

    public function logout()
    {

        // Forget the user's email from the session
        Session::forget('user_email');

       // Log the user out
        Auth::logout();

        // Redirect to the login page
        return redirect('/login');
    }
}
