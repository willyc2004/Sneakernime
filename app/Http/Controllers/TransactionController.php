<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with(['extras'])->paginate(6);

        $alltransactions = Transaction::all();
        // Get unique product IDs from transactions
        $productIds = $alltransactions->pluck('id_product')->unique()->toArray();

        // Fetch corresponding products
        $products = Product::whereIn('id', $productIds)->get();

        // dd($products);

        return view('sneakers', [
            "pagetitle" => "Sneakers",
            'transactions' => $transactions,
            'products' => $products
        ]);
    }

    public function showTransaction(User $user)
    {
        // Assuming there's a relationship between User and Review models
        $transactions = $user->transactions()->paginate(5);

        // Eager load the 'transaction' relationship to avoid N+1 queries
        // $transactions->load('transaction');

        return view('admin.transaksi', [
            "pagetitle" => "Admin Review",
            'transactions' => $transactions,
            'user' => $user, // Pass the user to the view if needed
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
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return view('admin.fototransaksi', [
            'pagetitle' => 'Admin Foto Extra',
            'transaction' => $transaction,
            'images' => $transaction->transactionImage
        ]);
    }

    public function showEdit(Transaction $transaction)
    {
        return view('admin.fototransaksiedit', [
            'pagetitle' => 'Admin Foto Extra',
            'transaction' => $transaction,
            'images' => $transaction->transactionImage
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
