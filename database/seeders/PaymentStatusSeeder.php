<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_statuses')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'status' => "Pending"
        ]);
        DB::table('payment_statuses')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'status' => "Success"
        ]);
    }
}
