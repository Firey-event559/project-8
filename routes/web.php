<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\OfferteController;


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
Route::view('webshop', 'webshop');
Route::view('offertes.offerte_succes', 'offertes.offerte_succes');
Route::view('signup_succes', 'signup_succes');
Route::view('admin', 'admin');
Route::view('admin_offerte', 'admin_offerte');
Route::view('admin_change', 'admin_change');
Route::view('admin_list', 'admin_list');



Route::post('signup', [UserController::class, 'Insertaccount']);

Route::post('login', [LoginController::class, 'Selectaccount']);

Route::post('layout', [loginController::class, 'logout']);

Route::post('offerte', [OfferteController::class, 'Insertofferte']);
?>