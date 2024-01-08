<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ProductSeeder::class,
            ExtraSeeder::class,
            ProductImageSeeder::class,
            ExtraImageSeeder::class,
            PaymentStatusSeeder::class,
            StatusShippingSeeder::class,
            UserSeeder::class,
            ReviewSeeder::class,
            ShippingDetailsSeeder::class,
            CitySeeder::class,
            TransactionSeeder::class
        ]);
    }
}
