<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoldProducts;

class SoldProductsController extends Controller
{
    public function index()
    {
        $soldProducts = SoldProducts::all();

        return view('sneakers', [
            "pagetitle" => "Sneakers",
            'soldProducts' => $soldProducts
        ]);
    }
}
