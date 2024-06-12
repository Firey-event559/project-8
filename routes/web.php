<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;


Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/login_signup', 'login_signup');
Route::view('/login', 'login');
Route::view('/services', 'services');
Route::view('/offerte', 'offerte');
Route::view('/contact', 'contact');
Route::view('/signup', 'signup');
Route::view('/about_us', 'about_us');
Route::view('/login', 'login');
Route::view('offertes.offerte', 'offertes.offerte');


Route::post('signup', [UserController::class, 'Insertaccount']);

Route::post('login', [LoginController::class, 'Selectaccount']);

Route::get('/index', function () {
    return view('index');
})->name('index');


Route::post('layout', [loginController::class, 'uitloggen']);

Route::post('signup', [UserController::class, 'Insertaccount'])

?>