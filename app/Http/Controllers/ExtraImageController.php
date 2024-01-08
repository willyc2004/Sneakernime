<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Extra;
use App\Models\ExtraImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtraImageController extends Controller
{

    public function index()
    {
        return view('admin.fotoextra', [
            'pagetitle' => 'Admin Foto Extra',
            'id_extra' => "",
            'images' => [],
        ]);
    }



    public function addImage(Request $request, $id)
    {
        $request->validate([
            'add_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('add_image')) {
            // Store the image in the specified folder within the public disk
            $imagePath = $request->file('add_image')->store('images/extra', ['disk'=>'public']);

            // Create a new ProductImage instance
            $extraImage = new ExtraImage([
                'image_path' => $imagePath,
            ]);

            // Save the image relation to the product
            $extra = Extra::findOrFail($id);
            $extra->images()->save($extraImage);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        // Find the image by ID
        $image = ExtraImage::findOrFail($id);

        // Delete the image file
        Storage::delete('public/' . $image->image_path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }


}
