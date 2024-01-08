<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extras')->insert([
            'name' => "Tali",
            'description' => "Karakter dengan background penuh satu sepatu.",
            'price' => 900000
        ]);
        DB::table('extras')->insert([
            'name' => "Tali & Daleman",
            'description' => "Karakter dengan background setengah atau efek-efek disekitarnya.",
            'price' => 920000
        ]);
        DB::table('extras')->insert([
            'name' => "Glow",
            'description' => "Gambar Karakter saja tanpa background.",
            'price' => 900000
        ]);
        DB::table('extras')->insert([
            'name' => "Sole",
            'description' => "Mata Karakter, Tulisan Jepang, atau Logo.",
            'price' => 900000
        ]);
    }
}
