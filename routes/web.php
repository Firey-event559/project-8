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


Route::post('signup', [UserController::class, 'Insertaccount']);

Route::post('login', [LoginController::class, 'Selectaccount']);
