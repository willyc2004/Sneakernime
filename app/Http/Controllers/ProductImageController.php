<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{

    public function index()
    {
        return view('admin.fotoproduk', [
            'pagetitle' => 'Admin Foto Produk',
            'id_product' => "",
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
            $imagePath = $request->file('add_image')->store('images/produk', ['disk'=>'public']);

            // Create a new ProductImage instance
            $productImage = new ProductImage([
                'image_path' => $imagePath,
            ]);

            // Save the image relation to the product
            $product = Product::findOrFail($id);
            $product->images()->save($productImage);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        // Find the image by ID
        $image = ProductImage::findOrFail($id);

        // Delete the image file
        Storage::delete('public/' . $image->image_path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }


    // protected function getImageType($productId)
    // {
    //     switch ($productId) {
    //         case 1:
    //             return 'Full Background';
    //         case 2:
    //             return 'Half Background';
    //         case 3:
    //             return 'Just Logo';
    //         default:
    //             return 'No Background';
    //     }
    // }
}
