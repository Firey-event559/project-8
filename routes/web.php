<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OfferteController;
use App\Http\Controllers\ProductenController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ItNieuwsController;
use Illuminate\Support\Facades\Route;
use App\Models\Producten;
use App\Models\Offerte;
use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\it_nieuws;

// Public Routes
Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/login_signup', 'login_signup');
Route::view('/login', 'login')->name('login');
Route::view('/services', 'services');
Route::view('/offerte', 'offerte');
Route::view('/contact', 'contact');
Route::view('/signup', 'signup');


Route::get('offertes.offerte', function () {
    $products = Producten::all();
    return view('offertes.offerte', compact('products'));
});

Route::get('offertes.offerte', function () {
    $products = Producten::all();
    return view('offertes.offerte', compact('products'));
});


Route::get('webshop', function () {
    $products = Producten::all();
    return view('webshop', compact('products'));
});

Route::get('products/{product}', function (Producten $product) {
    return view('product_view', compact('product'));
})->name('products');




Route::get('orders', function () {
    $orders = Orders::all();  
    return view('orders.index', compact('orders'));
});

// Success Views
Route::view('offertes.offerte_succes', 'offertes.offerte_succes');
Route::view('signup_succes', 'signup_succes');




Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('layout', [LoginController::class, 'logout']);

    Route::get('/shopping_cart', [CartController::class, 'index'])->name('shopping_cart');
    Route::post('add_to_cart', [CartController::class, 'Add_to_cart']);
    Route::post('cart_update', [CartController::class, 'Update_cart']);
    Route::post('Create_order', [OrdersController::class, 'Createorder']);


    Route::get('user_change/{user}', [UserController::class, 'showEditForm'])->name('user_change');
    Route::put('user_change/{user}', [UserController::class, 'Updateaccount'])->name('Updateaccount');
});



Route::group(['middleware' => ['admin']], function () {
    Route::view('admin', 'admin');


    Route::get('admin_offerte', function () {
        $offertes = Offerte::all();
        return view('admin_offerte', compact('offertes'));
    });


    Route::get('admin_change', function () {
        $products = Producten::all();
        return view('admin_change', compact('products'));
    });


    Route::get('admin_list', function () {
        $orderItems = OrderItem::with(['product', 'order.user'])->get();
        return view('admin_list', compact('orderItems'));
    });

    Route::get('admin_it-nieuws-verwijder', function () {
        $it_nieuws = it_nieuws::all();
        return view('admin_it-nieuws-verwijder', compact('it_nieuws'));
    });


    Route::delete('shipping/{order_id}', [OrderItemController::class, 'destroy'])->name('shipping');


    Route::get('edit/{id}', function ($id) {
        $product = Producten::find($id);
        return view('admin_product_update', compact('product'));
    })->name('edit');

    Route::get('admin_it-nieuws', function () {
        return view('admin_it-nieuws');
    });

    Route::get('/admin_it-nieuws-verwijder/{id}', [ItNieuwsController::class, 'destroy'])->name('admin.it-nieuws-verwijder');
    Route::post('insert_it_nieuws', [ItNieuwsController::class, 'Insert_it_nieuws']);

    Route::patch('update/{product}', [ProductenController::class, 'Updateproduct'])->name('update');
    Route::delete('/admin/products/{id}', [ProductenController::class, 'destroy'])->name('products.destroy');
    Route::delete('/offertes/{offerte}', [OfferteController::class, 'destroy'])->name('offerte.destroy');
    Route::post('productinsert', [ProductenController::class, 'Insertproduct']);

});





Route::post('signup', [UserController::class, 'Insertaccount']);
Route::post('login', [LoginController::class, 'Selectaccount']);
Route::post('offerte', [OfferteController::class, 'Insertofferte']);
