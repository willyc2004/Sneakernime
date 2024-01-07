<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            'name' => "Full Background",
            'description' => "Karakter dengan background penuh satu sepatu.",
            'price' => 970000
        ]);
        DB::table('products')->insert([
            'name' => "Half Background",
            'description' => "Karakter dengan background setengah atau efek-efek disekitarnya.",
            'price' => 920000
        ]);
        DB::table('products')->insert([
            'name' => "Just Logo",
            'description' => "Mata Karakter, Tulisan Jepang, atau Logo.",
            'price' => 780000
        ]);
        DB::table('products')->insert([
            'name' => "No Background",
            'description' => "Gambar Karakter saja tanpa background.",
            'price' => 870000
        ]);
    }
}
