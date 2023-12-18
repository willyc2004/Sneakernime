<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayment_StatusRequest;
use App\Http\Requests\UpdatePayment_StatusRequest;
use App\Models\Payment_Status;

class PaymentStatusController extends Controller
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
    public function store(StorePayment_StatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment_Status $payment_Status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment_Status $payment_Status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayment_StatusRequest $request, Payment_Status $payment_Status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment_Status $payment_Status)
    {
        //
    }
}
