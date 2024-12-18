<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producten;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Display the user's cart
    public function index()
    {

        if (!Auth::check()) {
            return redirect('login');
        } else {
            // Get the cart items associated with the logged-in user
            $cartitems = Cart::session(Auth::id())->getContent();
            $products = Producten::all();

            // Pass the cart items to the 'shopping_cart' view
            return view('shopping_cart', compact('cartitems', 'products'));
        }
    }



    // Add a product to the user's cart
    public function Addtocart(Request $request)
    {
        // Retrieve the product from the database by its ID
        $product = Producten::find($request->product_id);

        if ($product) {
            // Add the product to the user's cart
            Cart::session(Auth::id())->add(array(
                'id' => $product->id,
                'name' => $product->Name,
                'price' => $product->Price,
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


    public function Updatecart(Request $request)
    {
        // Check if the delete action is triggered
        if ($request->input('action') == 'delete') {
            $productId = $request->input('product_id')[0];
            Cart::session(Auth::id())->remove($productId);

            // Redirect back after deletion
            return redirect()->back();
        }

        // Validate incoming request for updating cart
        $request->validate([
            'product_id' => 'required|array',
            'product_id.*' => 'integer',
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1',
        ]);

        // Update the quantity of the products in the cart
        foreach ($request->product_id as $index => $productId) {
            $quantity = $request->quantity[$index];
            Cart::session(Auth::id())->update($productId, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $quantity,
                ),
            ));
        }

        // Redirect back to shopping cart after update
        return redirect('shopping_cart');
    }
}
