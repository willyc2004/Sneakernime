<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'total_price' => 1020000,
            'order_date' => '2023-01-15',
            'anime' => 'Naruto',
            'character' => 'Gojo',
            'size' => '40',
            'note' => 'Glow Hijau',
            'id_review' => 1,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 1,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 980000,
            'order_date' => '2023-01-15',
            'anime' => 'Boruto',
            'character' => 'Sakura',
            'size' => '42',
            'note' => 'Glow Merah',
            'id_review' => 2,
            'id_shipping_detail' => 2,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 2,            // Assuming user ID
            'id_product' => 2,         // Assuming product ID
        ]);
    }
}
