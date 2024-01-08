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
            'city'=> "Surabaya",
            'post_code' => "38122",
            'receipt'=> "1234",
            'id_status_shipping'=> '1',
        ]);
    }
}
