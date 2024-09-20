<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model

    {
        public $items = [];  
        public $totalQty = 0; 
        public $totalPrice = 0; 
    
        
        public function __construct($oldCart = null)
        {
            if ($oldCart) {
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }
        }
    
        /**
         * Add a product to the cart or increase the quantity if it already exists.
         *
         * @param object $product
         */
        public function add($product)
        {
            $id = $product->id;
    
            // Prepare the product item structure
            $item = [
                'id' => $id,
                'name' => $product->name,
                'product_number' => $product->product_number,
                'stock' => $product->stock,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1, // Set default quantity to 1
            ];
    
            // Check if the product is already in the cart
            if (isset($this->items[$id])) {
                // If yes, increment the quantity
                $this->items[$id]['quantity']++;
            } else {
                // Otherwise, add the new product to the cart
                $this->items[$id] = $item;
            }
    
            // Update total quantity and total price
            $this->totalQty++;
            $this->totalPrice += $product->price;
        }
    }
    