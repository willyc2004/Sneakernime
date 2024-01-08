<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extra_images')->insert([
            'image_path' => "images/extra/T-1.jpg",
            'id_extra' => "1"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "images/extra/T-2.jpg",
            'id_extra' => "1"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "images/extra/T-3.jpg",
            'id_extra' => "1"
        ]);


        DB::table('extra_images')->insert([
            'image_path' => "images/extra/TD-1.jpg",
            'id_extra' => "2"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "images/extra/TD-2.jpg",
            'id_extra' => "2"
        ]);


        DB::table('extra_images')->insert([
            'image_path' => "images/extra/G-1.jpg",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/G-2.jpg",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/G-3.jpg",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/G-4.jpg",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/G-5.jpg",
            'id_extra' => "3"
        ]);



        DB::table('extra_images')->insert([
            'image_path' => "images/extra/S-1.jpg",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/S-2.jpg",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/S-3.jpg",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/S-4.jpg",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "images/extra/S-5.jpg",
            'id_extra' => "4"
        ]);

    }
}
