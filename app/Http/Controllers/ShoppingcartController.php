<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoppingcart;  // Ensure you're importing your Shoppingcart class
use App\Models\producten;     // Assuming your product model is named "producten"
use Illuminate\Support\Facades\Session;

class ShoppingcartController extends Controller
{
    public function shoppingcart(Request $request, $id)
    {
    
        $product = producten::find($id);
        if (!$product) {
            return redirect()->route('webshop')->with('error', 'Product not found!');
        }

    
        $oldcart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Shoppingcart($oldcart);

      
        $cart->add($product);

        
        $request->session()->put('cart', $cart);

        return redirect()->route('webshop')->with('added', 'Product toegevoegd aan winkelwagen!');
    }

    public function showCart()
    {
        $cart = Session::get('cart');
        return view('cart', ['cart' => $cart]);
    }
}

