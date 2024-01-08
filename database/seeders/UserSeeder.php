<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test@gmail.com",
            'password' => "password",
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "TestAdmin",
            'email' => "testadmin@gmail.com",
            'password' => "password",
            'role' => '1'
        ]);
    }
}
