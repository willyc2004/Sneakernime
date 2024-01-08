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
        return view('admin.fotoproduk', [
            'pagetitle' => 'Admin Foto Produk',
            'id_extra' => "",
            'images' => [],
        ]);
    }



    public function addImage(Request $request, $id)
    {
        $request->validate([
            'add_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $extra = Extra::findOrFail($id);

        $imagePath = $request->file('add_image')->store('images');

        $extraImage = new ExtraImage([
            'image_path' => $imagePath,
        ]);

        $extra->images()->save($extraImage);

        return redirect()->back();
    }

    protected function getImageType($extraId)
    {
        switch ($extraId) {
            case 1:
                return 'Tali';
            case 2:
                return 'Tali + Daleman';
            case 3:
                return 'Glow';
            default:
                return 'Sol';
        }
    }
}
