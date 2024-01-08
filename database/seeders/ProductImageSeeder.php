<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_1.jpg",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_2.jpg",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_3.jpg",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/FB_4.jpg",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/HB_1.jpg",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/HB_2.jpg",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/HB_3.jpg",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/HB_4.jpg",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/HB_5.jpg",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/JL_1.jpg",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/JL_2.jpg",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/JL_3.jpg",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/JL_4.jpg",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/JL_5.jpg",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/NB_1.jpg",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/NB_2.jpg",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/NB_3.jpg",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'image_path' => "images/produk/NB_4.jpg",
            'id_product' => "4"
        ]);
    }
}
