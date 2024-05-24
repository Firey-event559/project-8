<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login_signup', function () {
    return view('/login_signup'); 
 });
 
