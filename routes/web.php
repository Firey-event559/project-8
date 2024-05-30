<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\RegistrationController;

// Define routes for static views
Route::get('/', function () {
    return view('index');
});

Route::get('/login_signup', function () {
    return view('login_signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/webshop', function () {
    $users = User::all();
    return view('webshop', ['users' => $users]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/offerte', function () {
    return view('offerte');
});


Route::get('/signup', [RegistrationController::class, 'Showform']);
Route::post('/signup', [RegistrationController::class, 'Registeren']);



