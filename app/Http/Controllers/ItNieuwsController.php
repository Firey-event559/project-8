<?php

namespace App\Http\Controllers;

use App\Models\it_nieuws;
use App\Http\Requests\Storeit_nieuwsRequest;
use App\Http\Requests\Updateit_nieuwsRequest;
use Illuminate\Http\Request;
use App\Models\ItNieuws;
use Illuminate\Support\Facades\File;


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
            'title' => 'required|max:255|min:5|max:255',
            'description' => 'required|min:10|max:50000',
            'Image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|mimetypes:image/png,image/jpeg,image/jpg,image/gif,image/svg+xml|max:50000',
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
        $it_nieuws = new ItNieuws();
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
    public function show(ItNieuws $it_nieuws)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItNieuws $it_nieuws)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateit_nieuwsRequest $request, ItNieuws $it_nieuws)
    {

    }


    public function destroy($id)
    {
        // Find the it_nieuw instance by ID
        $it_nieuw = ItNieuws::findOrFail($id);

        // Get the image path
        $imagepath = public_path($it_nieuw->Image);

        // Check if the image file exists and delete it
        if (File::exists($imagepath)) {
            File::delete($imagepath);
        }

        // Delete the it_nieuw instance
        $it_nieuw->delete();

        // Redirect to the appropriate route with a success message
        return redirect('admin_it-nieuws-verwijder')->with('success', 'Nieuwsbericht is verwijderd!');
    }

}
