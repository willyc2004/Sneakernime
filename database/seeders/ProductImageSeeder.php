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
            'image_path' => "FB_1",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "FB_2",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "FB_3",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "FB_4",
            'id_product' => "1"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "HB_1",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "HB_2",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "HB_3",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "HB_4",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "HB_5",
            'id_product' => "2"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "JL_1",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "JL_2",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "JL_3",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "JL_4",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "JL_5",
            'id_product' => "3"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "NB_1",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "NB_2",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "NB_3",
            'id_product' => "4"
        ]);
        DB::table('product_images')->insert([
            'image_path' => "NB_4",
            'id_product' => "4"
        ]);
    }
}
