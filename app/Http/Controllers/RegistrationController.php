<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function Showform()
    {
        return view('/signup');
    }

    public function Registeren(Request $request)
    {
        // Validate de data van het formulier
        $Validatedata = $request->validate([
            'naam' => 'required|max:255',
            'telefoonnummer' => 'required|max:15',
            'email' => 'required|email|unique:users,email',
            'adres' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        // Maak een nieuwe User aan
        $user = new User();
        $user->naam = $Validatedata['naam'];
        $user->telefoonnummer = $Validatedata['telefoonnummer'];
        $user->email = $Validatedata['email'];
        $user->adres = $Validatedata['adres'];
        $user->password = Hash::make($Validatedata['password']);
        $user->save();

        // Stuur de gebruiker terug naar de registratiepagina met een succesmelding
        return redirect('/signup')->with('success', 'Registration successful.');
    }
}

