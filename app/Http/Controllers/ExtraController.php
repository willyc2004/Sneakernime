<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExtraRequest;
use App\Http\Requests\UpdateExtraRequest;
use App\Models\Extra;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extras = Extra::all();

        return view('admin.extra',
        [
            "pagetitle" => "Admin Extra",
            'extras' => $extras
        ]);
    }

    public function show(Extra $extra)
    {
        return view('admin.fotoextra', [
            'pagetitle' => 'Admin Foto Extra',
            'extra' => $extra,
            'images' => $extra->images
        ]);
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
    public function store(StoreExtraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extra $extra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExtraRequest $request, Extra $extra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extra $extra)
    {
        //
    }
}
