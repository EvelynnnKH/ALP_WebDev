<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_roles')->insert([
            [
                'id' => 1,
                'user_id' => 16,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'user_id' => 6,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'user_id' => 7,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'user_id' => 8,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'user_id' => 9,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'user_id' => 10,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'user_id' => 11,
                'role' => "admin",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'user_id' => 12,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'user_id' => 13,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'user_id' => 14,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'user_id' => 15,
                'role' => "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
