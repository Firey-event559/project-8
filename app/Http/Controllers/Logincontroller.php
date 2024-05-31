<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller{
    
    public function Selectaccount(Request $request){
        
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        $email = $validate['email'];
        $password = $validate['password'];

       
        $user = User::where('email', $email)->first();

        
        if (!$user || !Hash::check($password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        
        $token = $user->createToken('my-app-token')->plainTextToken;

        
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return redirect()->route('index');
       
    }
}

