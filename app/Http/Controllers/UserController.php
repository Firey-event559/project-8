<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

   

    public function Insertaccount(Request $request){
        // Validate the form data
        $Validated = $request->validate([
            'name' => 'required|max:255',
            'phonenumber' => 'required|numeric',
            'email' => 'required',
            'adress' => 'required',
            'password' => 'required',
        ]);

     // Create a new user
   $user = new User();
   $user->name = $Validated['name'];
   $user->phonenumber = $Validated['phonenumber'];
   $user->email = $Validated['email'];
   $user->adress = $Validated['adress'];
   $user->password = Hash::make($Validated['password']);
   $user->role = 1;
   $user->save();


  

    }
}
