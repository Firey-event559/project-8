<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    
    
public function Selectaccount(Request $request){
        
    $validateddata = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $gegevens = $request->only('email', 'password');

    if (Auth::attempt($gegevens)) {
        $user = Auth::user();
        $token = $user->createToken('my-app-token')->plainTextToken;

        
        Session::put('user_email', $user->email);

        return view('index', ['email' => $user->email]);
    }

    return view('login')->with('error', 'These credentials do not match our records.');
}
}


