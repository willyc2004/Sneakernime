<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Http\Requests\StoreReferenceImageRequest;
use App\Http\Requests\UpdateReferenceImageRequest;
use App\Models\ReferenceImage;
=======
use App\Models\ReferenceImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferenceImageRequest;
use App\Http\Requests\UpdateReferenceImageRequest;
>>>>>>> Stashed changes

class ReferenceImageController extends Controller
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
    public function store(StoreReferenceImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferenceImage $referenceImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferenceImage $referenceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferenceImageRequest $request, ReferenceImage $referenceImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferenceImage $referenceImage)
    {
        //
    }
}
