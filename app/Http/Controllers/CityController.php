<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {

        $cities = City::all();
        return view(
            'detail',
            [
                "pagetitle" => "Detail Sneakers",
                'cities' => $cities,
                'ongkir' => ''
            ]
        );
    }

    public function cekOngkir(Request $request)
    {
        $originCity = City::find($request->origin)->name;
        $destinationCity = City::find($request->destination)->name;


        $responseCost = Http::withHeaders([
            'key' => 'b38a1d53265650ebcdb3ec985fdab977'
        ])->post('https://api.rajaongkir.com/starter/cost', [
                    'origin' => $request->origin,
                    'destination' => $request->destination,
                    'weight' => $request->weight,
                    'courier' => $request->courier,
                ]);

        $ongkir = $responseCost['rajaongkir'];
        $cities = City::all();

        return view('detail', [
            "pagetitle" => "Detail Sneakers",
            'cities' => $cities,
            'origin' => $originCity,
            'destination' => $destinationCity,
            'ongkir' => $ongkir
        ]);

    }
}
