<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{



    public function Insertaccount(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|max:255|string|min:2',
            'phonenumber' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'adress' => 'required|string|min:2',
            'password' => 'required | min:6',
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

   return redirect('signup_succes');

    }

   public function Updateaccount(Request $request, User $user)
    {


        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|max:255|string|min:2',
            'phonenumber' => 'required|numeric',
            'adress' => 'required|string|min:2',
        ]);

    
        // Update the user properties
        $user->name = $validated['name'];
        $user->phonenumber = $validated['phonenumber'];
        $user->adress = $validated['adress'];
        
        // Save changes to the database
        $user->save(); // This should update the existing record
    
        // Log after saving to verify it's updated
        \Log::info('user after update:', $user->toArray());
    
        return redirect('index')->with('success', ' je accountgegevens zijn succesvol bijgewerkt');
    }

    public function showEditForm(User $user)
    {
        return view('user_change', compact('user'));
    }

}

