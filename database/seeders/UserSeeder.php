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
        $passwordAdmin = "passwordAdmin";

        $hashedPasswordAdmin = password_hash($passwordAdmin, PASSWORD_BCRYPT);
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
            'password' => $hashedPasswordAdmin,
            'role' => '1'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test1@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test2@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test3@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test4@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test5@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test6@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test7@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test8@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'name' => "Test",
            'email' => "test9@gmail.com",
            'password' => $hashedPassword,
            'role' => '0'
        ]);
    }
}
