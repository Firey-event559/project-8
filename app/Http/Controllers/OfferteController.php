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
            'productnumber' => 'required',
            'details' => 'required|min:10',
        ]);

        $offerte = new offerte();
        $offerte->name = $validated['name'];
        $offerte->email = $validated['email'];
        $offerte->phonenumber = $validated['phonenumber'];
        $offerte->productnumber = $validated['productnumber'];
        $offerte->details = $validated['details'];
        $offerte->save();

        return redirect('offertes.offerte_succes');



       
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
        //
    }
}
