<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_shippings')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 'Sedang di proses',
        ]);
        DB::table('status_shippings')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 'Dalam perjalanan',
        ]);
        DB::table('status_shippings')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 'Sudah tiba',
        ]);
    }
}
