<?php

namespace App\Http\Controllers;

use App\Models\TransactionImage;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionImageRequest;
use App\Http\Requests\UpdateTransactionImageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionImageController extends Controller
{

    public function addImage(Request $request, $id)
    {
        $request->validate([
            'add_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('add_image')) {
            // Store the image in the specified folder within the public disk
            $imagePath = $request->file('add_image')->store('images/transaksi', ['disk'=>'public']);

            // Create a new ProductImage instance
            $transactionImage = new TransactionImage([
                'image_path' => $imagePath,
            ]);

            // Save the image relation to the product
            $transaction = Transaction::findOrFail($id);
            $transaction->transactionImage()->save($transactionImage);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        // Find the image by ID
        $image = TransactionImage::findOrFail($id);

        // Delete the image file
        Storage::delete('public/' . $image->image_path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }
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
    public function store(StoreTransactionImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionImage $transactionImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionImage $transactionImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionImageRequest $request, TransactionImage $transactionImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
