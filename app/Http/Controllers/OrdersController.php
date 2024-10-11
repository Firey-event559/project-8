<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Producten;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all orders from the database
        $orders = orders::all();
        $products = Producten::all();

        // Return the view and pass the orders data
        return view('orders.index', compact('orders', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
   
         // Validate the incoming request
         
         public function Createorder(Request $request) 
         {
             // Validate the incoming request
             $request->validate([
                 'user_id' => 'required|exists:users,id',
                 'total' => 'required|numeric|min:0',  
                 'shipping_cost' => 'required|numeric|min:0', // Validate shipping cost
                 'delivery_options' => 'required|string',
                 'product_id' => 'required|array',
                 'product_id.*' => 'required|exists:productens,id', 
                 'quantity' => 'required|array',
                 'quantity.*' => 'required|integer|min:1',
             ]);
         
             DB::beginTransaction();
         
             try {
                 // Calculate total including shipping cost
                 $totalWithShipping = $request->total + $request->shipping_cost;
         
                 // Create the order
                 $order = Orders::create([
                     'user_id' => $request->user_id,
                     'amount' => $totalWithShipping,  // Use the total including shipping
                     'delivery_options' => $request->delivery_options,
                 ]);
         
                 // Loop through each product and add it to the order_items table
                 foreach ($request->product_id as $index => $productId) {
                     $quantity = $request->quantity[$index];
         
                     // Retrieve the product
                     $product = Producten::findOrFail($productId);
         
                     // Check stock
                     if ($product->Stock < $quantity) {
                     return redirect()->back()->with('error', 'Not enough stock for ' . $product->Name);
                     }
         
                     // Reduce stock and save
                     $product->Stock -= $quantity;
                     $product->save();
         
                     // Insert into order_items
                     DB::table('order_items')->insert([
                         'order_id' => $order->id,
                         'product_id' => $product->id,
                         'quantity' => $quantity,
                     ]);
                 }
         
                 // Clear the cart using Darryldecode\Cart
                 Cart::clear(); 
         
                 DB::commit();
                 return redirect('order_succes');
             } catch (\Exception $e) {
                 DB::rollback();
                 \Log::error('Order creation failed: ' . $e->getMessage());
             }
         }
         



        
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreordersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateordersRequest $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
        //
    }
}
    