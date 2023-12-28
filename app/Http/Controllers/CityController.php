<?php

namespace App\Http\Controllers;

<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
use App\Http\Requests\StoreOrderImageRequest;
use App\Http\Requests\UpdateOrderImageRequest;
use App\Models\OrderImage;

class OrderImageController extends Controller
========
use App\Models\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
    public function store(StoreOrderImageRequest $request)
========
    public function store(StoreCityRequest $request)
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
    {
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
    public function show(OrderImage $orderImage)
========
    public function show(City $city)
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
    public function edit(OrderImage $orderImage)
========
    public function edit(City $city)
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
    public function update(UpdateOrderImageRequest $request, OrderImage $orderImage)
========
    public function update(UpdateCityRequest $request, City $city)
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderImageController.php
    public function destroy(OrderImage $orderImage)
========
    public function destroy(City $city)
>>>>>>>> Stashed changes:app/Http/Controllers/CityController.php
    {
        //
    }
}
