<?php

namespace App\Http\Controllers;

use App\Models\producten;
use App\Http\Requests\StoreproductenRequest;
use App\Http\Requests\UpdateproductenRequest;
use Illuminate\Http\Request;

class ProductenController extends Controller
{


    public function Insertproduct(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'Name' => 'required|max:255|string|min:2|max:255',
            'Productnumber' => 'required|numeric|digits_between:5,20',
            'Stock' => 'required|numeric|max:10000',
            'Price' => 'required|numeric|max:10000',
            'Description' => 'required|string|min:2|max:50000',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:50000',
        ]);

        // Handle the uploaded image
        $imagepath = null;
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationpath = public_path('/images');

            // Check if the directory exists
            if (!file_exists($destinationpath)) {
                mkdir($destinationpath, 0755, true);
            }

            $image->move($destinationpath, $imagename);
            $imagepath = 'images/' . $imagename;
        }

        // Create and save the product
        $product = new Producten(); // Adjust to your actual model
        $product->Name = $validated['Name'];
        $product->Productnumber = $validated['Productnumber'];
        $product->Stock = $validated['Stock'];
        $product->Price = $validated['Price'];
        $product->Description = $validated['Description'];
        $product->Image = $imagepath; // Save the image path
        $product->save();


        return redirect('admin_change')->with('success', 'Het product is succesvol toegevoegd');

    }



    public function Updateproduct(Request $request, Producten $product)
    {
        // Validate the form data
        $validated = $request->validate([
            'Name' => 'required|max:255|string|min:2',
            'Productnumber' => 'required|numeric',
            'Stock' => 'required|numeric',
            'Price' => 'required|numeric',
            'Description' => 'required|string|min:2',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:50000',
        ]);



        // Keep the existing image path
        $imagepath = $product->Image;

        // Handle the uploaded image
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationpath = public_path('/images');

            // Check if the directory exists
            if (!file_exists($destinationpath)) {
                mkdir($destinationpath, 0755, true);
            }

            // Move the new image to the destination path
            $image->move($destinationpath, $imagename);
            $imagepath = 'images/' . $imagename;
        }

        // Update the product properties
        $product->Name = $validated['Name'];
        $product->Productnumber = $validated['Productnumber'];
        $product->Stock = $validated['Stock'];
        $product->Price = $validated['Price'];
        $product->Description = $validated['Description'];


        $product->Image = $imagepath;

        // Save changes to the database
        $product->save();

        // Log after saving to verify it's updated
        \Log::info('Product after update:', $product->toArray());

        return redirect('admin_change')->with('success', 'Het product is succesvol bijgewerkt');
    }

    public function destroy($id)
    {
        // Find the product by ID
        $product = producten::find($id);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product niet gevonden.');
        }

        // Delete the product
        $product->delete();

        // Redirect back with success message
        return redirect('admin_change')->with('success', 'Product verwijderd.');
    }


}