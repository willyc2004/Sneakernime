<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_1.jpg",
            'id_transaction' => "1"
        ]);
        DB::table('transaction_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_2.jpg",
            'id_transaction' => "1"
        ]);
        DB::table('transaction_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_3.jpg",
            'id_transaction' => "1"
        ]);
        DB::table('transaction_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_4.jpg",
            'id_transaction' => "1"
        ]);
    }
}
