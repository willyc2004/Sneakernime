<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
========
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
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
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
    public function store(StoreOrderRequest $request)
========
    public function store(Request $request)
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
    {
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
    public function show(Order $order)
========
    public function show(User $user)
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
    public function edit(Order $order)
========
    public function edit(User $user)
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
    public function update(UpdateOrderRequest $request, Order $order)
========
    public function update(Request $request, User $user)
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<<< Updated upstream:app/Http/Controllers/OrderController.php
    public function destroy(Order $order)
========
    public function destroy(User $user)
>>>>>>>> Stashed changes:app/Http/Controllers/UserController.php
    {
        //
    }
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
>>>>>>> Stashed changes
}
