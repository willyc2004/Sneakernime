<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'total_price' => 870000,
            'order_date' => '2023-01-29',
            'anime' => 'Jujutsu Kaisen',
            'character' => 'Gojo x Sukuna',
            'size' => '40',
            'note' => 'Glow Biru',
            'id_review' => 1,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 4,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 1160000,
            'order_date' => '2023-02-25',
            'anime' => 'Blue Lock',
            'character' => 'Nagi x Isagi',
            'size' => '42',
            'note' => '-',
            'id_review' => 2,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 2,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 870000,
            'order_date' => '2023-02-27',
            'anime' => 'One Piece',
            'character' => 'Luffy x Zoro',
            'size' => '43',
            'note' => '-',
            'id_review' => 3,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 3,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 780000,
            'order_date' => '2023-03-02',
            'anime' => 'Fire Force x Tokyo Ghoul',
            'character' => 'Kaneki Ken x Joker',
            'size' => '45',
            'note' => '-',
            'id_review' => 4,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 4,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 1010000,
            'order_date' => '2023-03-06',
            'anime' => 'Demon Slayer',
            'character' => 'Muichirou x Giyuu',
            'size' => '42',
            'note' => '-',
            'id_review' => 5,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 2,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 1010000,
            'order_date' => '2023-03-08',
            'anime' => 'One Piece',
            'character' => 'Luffy Gear 5',
            'size' => '39',
            'note' => '-',
            'id_review' => 6,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 2,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 870000,
            'order_date' => '2023-04-01',
            'anime' => 'Naruto Shippuden',
            'character' => 'Hatake Kakashi',
            'size' => '41',
            'note' => '-',
            'id_review' => 7,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 3,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 960000,
            'order_date' => '2023-04-04',
            'anime' => 'Attack on Titan',
            'character' => 'Levi Ackerman',
            'size' => '44',
            'note' => '-',
            'id_review' => 8,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 3,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 960000,
            'order_date' => '2023-04-07',
            'anime' => 'Jujutsu Kaisen',
            'character' => 'Gojo x Sukuna',
            'size' => '39',
            'note' => '-',
            'id_review' => 9,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 3,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 780000,
            'order_date' => '2023-04-10',
            'anime' => 'Oshi No Ko',
            'character' => 'Aqua Hoshino',
            'size' => '37',
            'note' => '-',
            'id_review' => 10,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 4,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 960000,
            'order_date' => '2023-04-14',
            'anime' => 'Attack on Titan',
            'character' => 'Mikasa x Eren',
            'size' => '42',
            'note' => '-',
            'id_review' => 11,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 3,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 1060000,
            'order_date' => '2023-04-18',
            'anime' => 'One Piece',
            'character' => 'Luffy x Nami',
            'size' => '45',
            'note' => '-',
            'id_review' => 12,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 1,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 970000,
            'order_date' => '2023-04-21',
            'anime' => 'Blue Lock',
            'character' => 'Kaiser x Itoshi Sae',
            'size' => '42',
            'note' => '-',
            'id_review' => 13,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 1,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 920000,
            'order_date' => '2023-04-24',
            'anime' => 'Jujutsu Kaisen',
            'character' => 'Gojo Satoru',
            'size' => '41',
            'note' => '-',
            'id_review' => 14,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 2,         // Assuming product ID
        ]);

        Transaction::create([
            'total_price' => 780000,
            'order_date' => '2023-04-28',
            'anime' => 'Jujutsu Kaisen',
            'character' => 'Megumi Fushiguro',
            'size' => '44',
            'note' => '-',
            'id_review' => 15,
            'id_shipping_detail' => 1,  // Assuming shipping_detail ID
            'id_payment_status' => 2,  // Assuming payment_status ID
            'id_user' => 1,            // Assuming user ID
            'id_product' => 4,         // Assuming product ID
        ]);
    }
}
