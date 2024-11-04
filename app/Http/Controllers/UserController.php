<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{



    public function Insertaccount(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|max:255|string|min:2|max:255',
            'phonenumber' => 'required|numeric|digits_between:5,20',
            'email' => 'required|email|unique:users,email|max:255',
            'adress' => 'required|string|min:2|max:255',
            'password' => 'required | min:6|max:20',
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
           'name' => 'required|max:255|string|min:2|max:255',
            'phonenumber' => 'required|numeric',
            'adress' => 'required|string|min:2|max:255',
            'password' => 'nullable|string|min:8|max:20|confirmed',
        ]);

        if ($request->filled('old_password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                // validation error if password doesn't ma
                throw ValidationException::withMessages([
                    'old_password' => ['Het oude wachtwoord is onjuist.']
                ]);
            }
        }
        // Update the user properties
        $user->name = $validated['name'];
        $user->phonenumber = $validated['phonenumber'];
        $user->adress = $validated['adress'];
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        // Save changes to the database
        $user->save();

        // Log after saving to verify it's updated
        \Log::info('user after update:', $user->toArray());

        return redirect('index')->with('success', ' je accountgegevens zijn succesvol bijgewerkt');
    }

    public function showEditForm(User $user)
    {
        return view('user_change', compact('user'));
    }

}

