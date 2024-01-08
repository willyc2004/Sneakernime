<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Full Background",
            'description' => "Karakter dengan background penuh satu sepatu.",
            'price' => 970000
        ]);
        DB::table('products')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Half Background",
            'description' => "Karakter dengan background setengah atau efek-efek disekitarnya.",
            'price' => 920000
        ]);
        DB::table('products')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "No Background",
            'description' => "Gambar Karakter saja tanpa background.",
            'price' => 870000
        ]);
        DB::table('products')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Just Logo",
            'description' => "Mata Karakter, Tulisan Jepang, atau Logo.",
            'price' => 780000
        ]);
    }
}
