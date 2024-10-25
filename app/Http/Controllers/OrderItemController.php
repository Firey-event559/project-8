<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Orders;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $order_id)
    {

        $orderItems = OrderItem::where('order_id', $order_id);

        // Check if any order items exist
        if ($orderItems->exists()) {
            // Delete all associated OrderItems
            $orderItems->delete();
        }

        // Optionally, delete the Order itself if needed
        Orders::find($order_id)->delete();

        return redirect()->back()->with('success', 'jouw bestelling is voltooid');

    }

}
