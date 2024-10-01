<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producten;
use App\Http\Controllers\CartController;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
      
    public function index(){
        
        $cartitems = Cart::getContent();
        return view('shopping_cart', compact('cartitems'));

    }


    public function Add_to_cart(Request $requests){

        $product = producten::find($requests->product_id);

        Cart::add(array(
            'id' => $product->id,
            'name' => $product->Name,
            'price' => $product->Price,
             'stock'=> $product->Stock,
             'image'=> $product->Image,
            'quantity' => $requests->quantity,
            'attributes' => array()
            
        ));

        return redirect('webshop')->with('success', 'Het product is succesvol toegevoegd aan uw winkelwagen');



    }
}
