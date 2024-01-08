<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extras')->insert([
            'name' => "Tali",
            'description' => "Cat Tali 1 Warna",
            'price' => 90000
        ]);
        DB::table('extras')->insert([
            'name' => "Tali & Daleman",
            'description' => "Cat Tali 1 Warna + Daleman Sepatu",
            'price' => 150000
        ]);
        DB::table('extras')->insert([
            'name' => "Glow",
            'description' => "Glow in the dark warna Hijau, Biru, Toska",
            'price' => 90000
        ]);
        DB::table('extras')->insert([
            'name' => "Sol",
            'description' => "Kustom sampai sol sepatu",
            'price' => 90000
        ]);
    }
}
