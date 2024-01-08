<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_details')->insert([
            'full_name' => "Halim Cahyadi",
            'phone_number' => "024812741243",
            'address' => "Citraland CBD Boulevard",
            'post_code' => "61256",
            'resi' => "JD931287421",
            'shipping_cost' => "18000",
            'id_status_shipping' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Willy Cahyadi",
            'phone_number' => "08472141243",
            'address' => "Jalan Nanas Utara 1",
            'post_code' => "61256",
            'resi' => "JD87213121",
            'shipping_cost' => "18000",
            'id_status_shipping' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Halim Cahyadi",
            'phone_number' => "024812741243",
            'address' => "Citraland CBD Boulevard",
            'post_code' => "61256",
            'resi' => "JD931287421",
            'shipping_cost' => "18000",
            'id_status_shipping' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('shipping_details')->insert([
            'full_name' => "Halim Cahyadi",
            'phone_number' => "024812741243",
            'address' => "Citraland CBD Boulevard",
            'post_code' => "61256",
            'resi' => "JD931287421",
            'shipping_cost' => "18000",
            'id_status_shipping' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }


}
