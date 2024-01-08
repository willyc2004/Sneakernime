<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
<<<<<<< Updated upstream
            DB::table('shipping_details')->insert([
                'total_price' => $faker->randomFloat(2, 10, 1000),
                'order_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'anime' => $faker->word,
                'character' => $faker->name,
                'size' => $faker->randomNumber(5),
                'note' => $faker->sentence,
                'id_shipping_detail' => '1',
                'id_payment_status' => rand(1, 3),
=======
            DB::table('transactions')->insert([
                'total_price' => $faker->randomNumber(5), // Ubah sesuai kebutuhan, bisa disesuaikan dengan rentang yang diinginkan
                'order_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'anime' => $faker->word,
                'character' => $faker->name,
                'size' => $faker->numberBetween(38, 46),
                'note' => $faker->sentence,
                'id_shipping_detail' => '1',
                'id_payment_status' => rand(1, 2),
>>>>>>> Stashed changes
                'id_user' => '1',
                'id_product' => rand(1, 4),
            ]);
        }
    }
}
