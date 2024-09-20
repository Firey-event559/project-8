<?php

namespace App\Http\Controllers;

use App\Models\Shoppingcart;
use App\Http\Requests\StoreShoppingcartRequest;
use App\Http\Requests\UpdateShoppingcartRequest;
use Illuminate\Http\Request;
use app\Models\Producten;

class ShoppingcartController extends Controller
{

    

    
    public function shoppingcart(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('webshop')->with('error', 'Product not found!');
        }

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Shoppingcart($oldCart);
        $cart->add($product);
        $request->session()->put('cart', $cart);

        return redirect()->route('webshop')->with('added', 'Product toegevoegd aan winkelwagen!');
    }
}

    