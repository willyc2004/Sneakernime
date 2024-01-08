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
        $password = "password";
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "TestAdmin",
            'email' => "testadmin@gmail.com",
            'password' => $hashedPassword,
            'role' => '1'
        ]);
    }
}
