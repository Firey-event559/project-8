<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

   

    public function Insertaccount(Request $request){
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phonenumber' => 'required|numeric',
            'email' => 'required',
            'adress' => 'required',
            'password' => 'required',
        ]);

     // Create a new user
   $user = new User();
   $user->name = $validated['name'];
   $user->phonenumber = $validated['phonenumber'];
   $user->email = $validated['email'];
   $user->adress = $validated['adress'];
   $user->password = Hash::make($validated['password']);
   $user->role = 1;
   $user->save();


  

    }
}