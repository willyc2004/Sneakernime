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
            'status' => 'sedang di proses',
        ]);
        DB::table('status_shippings')->insert([
            'status' => 'dalam perjalanan',
        ]);
        DB::table('status_shippings')->insert([
            'status' => 'sudah tiba',
        ]);
    }
}
