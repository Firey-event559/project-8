<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\OfferteController;
use App\Http\Controllers\ProductenController;
use App\Http\Controllers\OrderController;
use App\Models\Producten;
use App\Models\offerte;
use App\Models\orders;




Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/login_signup', 'login_signup');
Route::view('/login', 'login');
Route::view('/services', 'services');
Route::view('/offerte', 'offerte');
Route::view('/contact', 'contact');
Route::view('/signup', 'signup');
Route::view('/login', 'login');
Route::view('offertes.offerte', 'offertes.offerte');
Route::get('orders', [OrderController::class, 'index']);
Route::get('webshop', function () {
    $products = Producten::all();
    return view('webshop', compact('products'));
});

Route::get('orders', function () {
    // Fetch orders from the database
    $orders = Order::all();

    // Pass orders to the view
    return view('orders.index', compact('orders'));
});

Route::view('offertes.offerte_succes', 'offertes.offerte_succes');
Route::view('signup_succes', 'signup_succes');
Route::view('admin', 'admin');
Route::get('admin_offerte', function () {
    $offertes = offerte::all();
    return view('admin_offerte', compact('offertes'));
});
Route::view('admin_change', 'admin_change');
Route::view('admin_list', 'admin_list');
Route::view('Product_succes', 'Product_succes');

Route::get('admin_list', function () {
    $orders = orders::all();  // Fetch all orders from the database
    return view('admin_list', compact('orders'));  // Pass orders to the view
});

Route::post('signup', [UserController::class, 'Insertaccount']);

Route::post('login', [LoginController::class, 'Selectaccount']);

Route::post('Productinsert', [ProductenController::class, 'Insertproduct']);

Route::post('layout', [loginController::class, 'logout']);

Route::post('offerte', [OfferteController::class, 'Insertofferte']);

?>