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

        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|max:255|min:5',
            'description' => 'required|min:10',
            'Image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:50000',
        ]);


        // Set a default value for the image path in case it doesn't get set
        $imagepath = $product->Image ?? null;

        // Handle the uploaded image
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationpath = public_path('/images');

            // Check if the directory exists and create it if not
            if (!file_exists($destinationpath)) {
                mkdir($destinationpath, 0755, true);
            }

            // Move the new image to the destination path
            $image->move($destinationpath, $imagename);
            $imagepath = 'images/' . $imagename;
        }

        // Create a new it_nieuws instance and assign properties
        $it_nieuws = new it_nieuws();
        $it_nieuws->title = $validated['title'];
        $it_nieuws->description = $validated['description'];
        $it_nieuws->image = $imagepath;
        $it_nieuws->save();

        // Redirect to the admin_it-nieuws page
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