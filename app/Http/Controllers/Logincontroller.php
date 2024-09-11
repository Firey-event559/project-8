<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    
    
public function Selectaccount(Request $request){
        
    $validateddata = $request->validate([
        'email' => 'required|email|exists:users,email|max:255|min:6',
        'password' => 'required | min:6 | max:255',
    ]);

    $gegevens = $request->only('email', 'password');

    if (Auth::attempt($gegevens)) {
        $user = Auth::user();
        $token = $user->createToken('my-app-token')->plainTextToken;

        
        Session::put('user_email', $user->email);

        return redirect('/index')->with('email', $user->email);

    }
}


public function uitloggen(){
    
    Session::forget('user_email');

    
    Auth::Logout();

    return redirect('/login_signup');
}
}



