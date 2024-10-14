<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\OfferteController;
use App\Http\Controllers\ProductenController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
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
Route::view('offertes.offerte', 'offertes.offerte');
Route::get('orders', [OrderController::class, 'index']);


Route::view('/login', 'login')->name('login');



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



Route::group(['middleware' => [ 'web', 'auth']], function () {
    Route::post('layout', [loginController::class, 'logout']);

    Route::get('/shopping_cart', [CartController::class, 'index'])->name('shopping_cart');

    Route::post('add_to_cart', [CartController::class, 'Add_to_cart']);

    Route::post('cart_update', [CartController::class, 'update_cart']);

    Route::post('Create_order', [OrdersController::class, 'Createorder']);

    Route::get('order_succes', function () {
        return view('order_succes');
    })->name('order_succes');
    
    Route::get('user_change/{user}', [UserController::class, 'showEditForm'])->name('user_change');
    Route::put('user_change/{user}', [UserController::class, 'Updateaccount'])->name('Updateaccount');

});




  

Route::group(['middleware' => ['admin']], function () {
    Route::view('admin', 'admin');

    Route::get('admin_offerte', function () {
        $offertes = Offerte::all(); // Use the correct model name
        return view('admin_offerte', compact('offertes'));
    });

    Route::get('admin_change', function () {
        $products = Producten::all(); // Use the correct model name
        return view('admin_change', compact('products'));
    });

    Route::get('admin_list', function () {
        $orders = Orders::all();  // Use the correct model name
        return view('admin_list', compact('orders'));
    });

    Route::view('Product_succes', 'Product_succes');


    Route::get('edit/{id}', function ($id) {
        $product = Producten::find($id);
        return view('admin_product_update', compact('product'));
    })->name('edit');

    Route::patch('update/{product}', [ProductenController::class, 'Updateproduct'])->name('update');

    Route::delete('/admin/products/{id}', [ProductenController::class, 'destroy'])->name('products.destroy');

});




Route::post('signup', [UserController::class, 'Insertaccount']);

Route::post('login', [LoginController::class, 'Selectaccount']);

Route::post('productinsert', [ProductenController::class, 'Insertproduct']);

Route::post('offerte', [OfferteController::class, 'Insertofferte']);


?>