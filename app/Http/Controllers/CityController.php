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
        $originCity = City::find(444)->name;
        $destinationCity = City::find($request->destination)->name;


        $responseCost = Http::withHeaders([
            'key' => 'b38a1d53265650ebcdb3ec985fdab977'
        ])->post('https://api.rajaongkir.com/starter/cost', [
                    'origin' => 444, //City_id Surabaya
                    'destination' => $request->destination,
                    'weight' => 1000,
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
