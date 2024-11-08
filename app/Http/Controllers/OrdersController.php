<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Producten;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{

    public function index()
    {
        // Fetch all orders from the database
        $orders = orders::all();
        $products = Producten::all();

        // Return the view and pass the orders data
        return view('orders.index', compact('orders', 'products'));
    }



    public function Createorder(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric|min:0',
            'shipping_cost' => 'required|numeric|min:0',
            'delivery_options' => 'required|string',
            'product_id' => 'required|array',
            'product_id.*' => 'required|exists:productens,id',
            'quantity' => 'required|array',
            'quantity.*' => 'required|integer|min:1|max:5',
        ]);

        DB::beginTransaction();

        try {


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
                    DB::rollback();
                    return redirect('shopping_cart')->with('error', "Niet genoeg voorraad {$product->Name}");
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
            Cart::session(Auth::id())->clear();

            // Commit the transaction
            DB::commit();

            return redirect('shopping_cart')->with('success', 'Jouw bestelling is succesvol geplaatst!');
        } catch (\Exception $e) {
            DB::rollback();
            \Log::error('Order creation failed: ' . $e->getMessage());

            return redirect('shopping_cart')->with('error', 'An error occurred while placing the order. Please try again.');
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


    public function destroy(Orders $order)
    {

    }
}






