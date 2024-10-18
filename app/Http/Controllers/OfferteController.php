<?php

namespace App\Http\Controllers;

use App\Models\offerte;
use Illuminate\Http\Request;
use App\Http\Requests\StoreofferteRequest;
use App\Http\Requests\UpdateofferteRequest;

class OfferteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    
    public function Insertofferte(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phonenumber' => 'required|numeric',
            'productSelect' => 'required',
            'details' => 'required|min:10',
        ]);

        $offerte = new offerte();
        $offerte->name = $validated['name'];
        $offerte->email = $validated['email'];
        $offerte->phonenumber = $validated['phonenumber'];
        $offerte->productnumber = $validated['productSelect'];
        $offerte->details = $validated['details'];
        $offerte->save();

       return redirect('offertes.offerte')->with('success', 'Uw offerte is ontvangen!');



       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreofferteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(offerte $offerte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offerte $offerte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateofferteRequest $request, offerte $offerte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(offerte $offerte)
{
    // Check if the product exists
    if (!$offerte) {
        return redirect()->back()->with('error', 'Product niet gevonden.');
    }

    // Delete the product
    $offerte->delete();

    // Redirect back with success message
    return redirect('admin_offerte')->with('success', 'Product verwijderd.');
}



}
