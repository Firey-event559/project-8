<?php

namespace App\Http\Controllers;

use App\Models\producten;
use App\Http\Requests\StoreproductenRequest;
use App\Http\Requests\UpdateproductenRequest;
use Illuminate\Http\Request;

class ProductenController extends Controller{


    public function Insertproduct(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'Name' => 'required|max:255|string|min:2',
            'Productnumber' => 'required|numeric',
            'Stock' => 'required|numeric',
            'Price' => 'required|numeric',
            'Description' => 'required|string|min:2',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
        ]);
    
        // Handle the uploaded image
        $imagePath = null;
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
    
            // Check if the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            $image->move($destinationPath, $imageName);
            $imagePath = 'images/' . $imageName;
        }
    
        // Create and save the product
        $product = new Producten(); // Adjust to your actual model
        $product->Name = $validated['Name'];
        $product->Productnumber = $validated['Productnumber'];
        $product->Stock = $validated['Stock'];
        $product->Price = $validated['Price'];
        $product->Description = $validated['Description'];
        $product->Image = $imagePath; // Save the image path
        $product->save();
    

    }

}