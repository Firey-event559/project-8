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


    public function Insertofferte(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|min: 3|max:255',
            'phonenumber' => 'required|regex:/^[0-9\-\(\)\s]+$/|min:5|max:20',
            'productselect' => 'required',
            'details' => 'required|min:10|max:50000',
        ]);
        // Create a new offerte instance and assign properties
        $offerte = new offerte();
        $offerte->name = $validated['name'];
        $offerte->email = $validated['email'];
        $offerte->phonenumber = $validated['phonenumber'];
        $offerte->productnumber = $validated['productselect'];
        $offerte->details = $validated['details'];
        $offerte->save();
        // Redirect back with success message
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
            return redirect()->back()->with('error', 'offerte niet gevonden.');
        }

        // Delete the product
        $offerte->delete();

        // Redirect back with success message
        return redirect('admin_offerte')->with('success', 'offerte succesvol verwijderd.');
    }



}
