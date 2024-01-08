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
            'image_path' => "T-1",
            'id_extra' => "1"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "T-2",
            'id_extra' => "1"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "T-3",
            'id_extra' => "1"
        ]);


        DB::table('extra_images')->insert([
            'image_path' => "TD-1",
            'id_extra' => "2"
        ]);
        DB::table('extra_images')->insert([
            'image_path' => "TD-2",
            'id_extra' => "2"
        ]);


        DB::table('extra_images')->insert([
            'image_path' => "G-1",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "G-2",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "G-3",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "G-4",
            'id_extra' => "3"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "G-5",
            'id_extra' => "3"
        ]);



        DB::table('extra_images')->insert([
            'image_path' => "S-1",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "S-2",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "S-3",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "S-4",
            'id_extra' => "4"
        ]);

        DB::table('extra_images')->insert([
            'image_path' => "S-5",
            'id_extra' => "4"
        ]);

    }
}
