<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoldProducts;

class SoldProductsController extends Controller
{
    public function index()
    {
        $soldProducts = SoldProduct::with('product.extras')->paginate(10);

        return view('sneakers', [
            "pagetitle" => "Sneakers",
            'soldProducts' => $soldProducts
        ]);
    }
}
