<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class ShippingDetailController extends Controller
{
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
}
