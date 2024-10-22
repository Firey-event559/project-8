<?php

namespace App\Http\Controllers;

use App\Models\it_nieuws;
use App\Http\Requests\Storeit_nieuwsRequest;
use App\Http\Requests\Updateit_nieuwsRequest;
use Illuminate\Http\Request;
use app\Models\ItNieuws;

class ItNieuwsController extends Controller
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
    public function Insert_it_nieuws(request $request)
    {
       
    

        $validated = $request->validate([
            'title' => 'required|max:255|min:5',
            'description' => 'required|min:10',



    ]);

            $it_nieuws = new it_nieuws();
            $it_nieuws->title = $validated['title'];
            $it_nieuws->description = $validated['description'];
            $it_nieuws->save();

            return redirect('admin_it-nieuws')->with('success', 'Nieuwsbericht is geplaatst!');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeit_nieuwsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(it_nieuws $it_nieuws)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(it_nieuws $it_nieuws)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateit_nieuwsRequest $request, it_nieuws $it_nieuws)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(it_nieuws $it_nieuws)
    {
        //
    }
}
