<?php

namespace App\Http\Controllers;

use App\Models\StatusShipping;
use App\Models\Transaction;
use App\Models\ShippingDetail;
use Illuminate\Http\Request;

class ShippingDetailController extends Controller
{

    public function update(Request $request, Transaction $transaction)
    {
        // Validate the request data as needed
        $request->validate([
            'status' => 'required', // Add validation rules based on your needs
            'resi' => 'required',
        ]);

        // Update the shipping details
        $transaction->shippingDetail->statusShipping->update(['status' => $request->input('status')]);
        $transaction->shippingDetail->update(['resi' => $request->input('resi')]);

        // Redirect back or to another route as needed
        return redirect()->route('adminshipping', $transaction)->with('success', 'Shipping details updated successfully');
    }

    public function showShipping(Transaction $transaction)
    {
        // dd($transaction->shippingDetail);

        // dd($$transaction->shippingDetails);
        return view('admin.shipping', [
            'pagetitle' => 'Admin Shipping Details',
            'shipping' => $transaction->shippingDetail,
            'transaction' => $transaction,
            'user' => $transaction->user
            // 'images' => $transaction->transactionImage
        ]);
    }

    public function showAlamat(ShippingDetail $shipping)
    {

        // dd($transaction->shippingDetail);

        // dd($$transaction->shippingDetails);
        return view('admin.alamat', [
            'pagetitle' => 'Admin Alamat',
            'shipping' => $shipping,
            // 'transaction' => $transaction,
            // 'user' => $transaction->user
            // 'images' => $transaction->transactionImage
        ]);
    }

    public function editShipping(Transaction $transaction)
    {

        // dd($transaction->shippingDetail);
        $statuses = StatusShipping::all();

        // dd($$transaction->shippingDetails);
        return view('admin.shippingedit', [
            'pagetitle' => 'Admin Alamat',
            'shipping' => $transaction->shippingDetail,
            'statuses' => $statuses,
            'transaction' => $transaction,
            // 'user' => $transaction->user
            // 'images' => $transaction->transactionImage
        ]);
    }
}
