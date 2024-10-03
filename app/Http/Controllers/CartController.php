<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producten;
use App\Http\Controllers\CartController;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Display the user's cart
    public function index()
    {

        if (!Auth::check()) {
            return redirect('login')->with('error', 'U moet ingelogd zijn om iets toe te voegen aan uw winkelwagen');
        }else{
            // Get the cart items associated with the logged-in user
            $cartitems = Cart::session(Auth::id())->getContent();
            
            // Pass the cart items to the 'shopping_cart' view
            return view('shopping_cart', compact('cartitems'));
        }

    }

    // Add a product to the user's cart
    public function Add_to_cart(Request $request)
    {
        // Retrieve the product from the database by its ID
        $product = Producten::find($request->product_id);

        if ($product) {
            // Add the product to the user's cart
            Cart::session(Auth::id())->add(array(
                'id'       => $product->id,
                'name'     => $product->Name,
                'price'    => $product->Price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'stock' => $product->Stock
                )
            ));

            // Redirect to the webshop with a success message
            return redirect('webshop')->with('success', 'Het product is succesvol toegevoegd aan uw winkelwagen');
        } else {
            // If the product is not found, redirect with an error message
            return redirect('webshop')->with('error', 'Product niet gevonden.');
        }
    }

}