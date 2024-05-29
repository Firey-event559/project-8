<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login_signup', function () {
    return view('/login_signup'); 
 });

Route::get('/index', function () {
    return view('/index');

});
Route::get('/webshop', function () {
    return view('/webshop');

});
 
Route::get('/login', function () {
    return view('/login');

});

Route::get('/signup', function () {
    return view('/signup');

});
