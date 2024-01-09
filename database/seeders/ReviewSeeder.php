<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-1-2',
            "id_user"=> 1,
        ]);
        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 1,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 1,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Gambarnya Clean",
            'review_date' => '2023-11-23', // Corrected date format
            'id_user' => 1,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "GOJOOOOOO",
            'review_date' => '2023-09-13', // Corrected date format
            'id_user' => 1,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-01-02', // Corrected date format
            'id_user' => 3,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 3,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 3,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 3,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 3,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-1-2',
            "id_user"=> 4,
        ]);
        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 4,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 4,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Gambarnya Clean",
            'review_date' => '2023-11-23', // Corrected date format
            'id_user' => 4,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "GOJOOOOOO",
            'review_date' => '2023-09-13', // Corrected date format
            'id_user' => 4,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-01-02', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-1-2',
            "id_user"=> 5,
        ]);
        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 5,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 6,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Gambarnya Clean",
            'review_date' => '2023-11-23', // Corrected date format
            'id_user' => 6,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "GOJOOOOOO",
            'review_date' => '2023-09-13', // Corrected date format
            'id_user' => 6,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "Wow Keren",
            'review_date' => '2023-01-02', // Corrected date format
            'id_user' => 7,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 7,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 8,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 4,
            'comment' => "Bagus",
            'review_date' => '2023-04-12', // Corrected date format
            'id_user' => 8,
        ]);

        DB::table('reviews')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'rating' => 5,
            'comment' => "CAKEP BANGET",
            'review_date' => '2023-12-22', // Corrected date format
            'id_user' => 9,
        ]);
    }
}
