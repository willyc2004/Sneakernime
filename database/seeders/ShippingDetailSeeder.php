<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_details')->insert([
            'full_name' => "Halim Cahyadi",
            'phone_number' => "0839128431244",
            'address' => "Citraland CBD Boulevard",
            'post_code' => "60219",
            'resi' => "JD931287421",
            'shipping_cost' => "18000",
            'id_status_shipping' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Willy Cahyadi",
            'phone_number' => "0847214124342",
            'address' => "Jalan Nanas Utara 1",
            'post_code' => "84923",
            'resi' => "JD42183214",
            'shipping_cost' => "20000",
            'id_status_shipping' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Radhit Bagus",
            'phone_number' => "042134214442",
            'address' => "Jalan Semangka 123",
            'post_code' => "84127",
            'resi' => "JD841294412",
            'shipping_cost' => "24000",
            'id_status_shipping' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Halim Cahyadi",
            'phone_number' => "089421748324",
            'address' => "Jalan Samgyeopsal",
            'post_code' => "42314",
            'resi' => "JD942341245",
            'shipping_cost' => "26000",
            'id_status_shipping' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
