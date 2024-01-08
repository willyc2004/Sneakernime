<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::where("id", $request->id_product)->first();
        $images = ProductImage::where("id_product", $product->id);

        return view('admin.fotoproduk',
        [
            "pagetitle" => "Admin Produk",
            'id_product' => $product->id,
            'images'=> $images
        ]);
    }

    public function addImage(Request $request, $id)
    {
        $request->validate([
            'add_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Retrieve the product using the injected product ID
        $product = Product::findOrFail($id);

        $imagePath = $request->file('add_image')->store('images');

        $productImage = new ProductImage([
            'image_path' => $imagePath,
        ]);

        $product->images()->save($productImage);

        return redirect()->back();
    }

    protected function getImageType($productId)
    {
        switch ($productId) {
            case 1:
                return 'Full Background';
            case 2:
                return 'Half Background';
            case 3:
                return 'Just Logo';
            default:
                return 'No Background';
        }
    }
}
