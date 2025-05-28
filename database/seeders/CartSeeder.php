<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('carts')->insert([
            [
                'cart_id' => 16,
                'user_id' => 16,
                'status_del' => 0,
            ],
            [
                'cart_id' => 2,
                'user_id' => 2,
                'status_del' => 0,
            ],
            [
                'cart_id' => 3,
                'user_id' => 3,
                'status_del' => 0,
            ],
            [
                'cart_id' => 4,
                'user_id' => 4,
                'status_del' => 0,
            ],
            [
                'cart_id' => 5,
                'user_id' => 5,
                'status_del' => 0,
            ],	
            [
                'cart_id' => 6,
                'user_id' => 6,
                'status_del' => 0,
            ],
            [
                'cart_id' => 7,
                'user_id' => 7,
                'status_del' => 0,
            ],
            [
                'cart_id' => 8,
                'user_id' => 8,
                'status_del' => 0,
            ],
            [
                'cart_id' => 9,
                'user_id' => 9,
                'status_del' => 0,
            ],
            [
                'cart_id' => 10,
                'user_id' => 10,
                'status_del' => 0,
            ],
            [
                'cart_id' => 11,
                'user_id' => 11,
                'status_del' => 0,
            ],
            [
                'cart_id' => 12,
                'user_id' => 12,
                'status_del' => 0,
            ],
            [
                'cart_id' => 13,
                'user_id' => 13,
                'status_del' => 0,
            ],
            [
                'cart_id' => 14,
                'user_id' => 14,
                'status_del' => 0,
            ],
            [
                'cart_id' => 15,
                'user_id' => 15,
                'status_del' => 0,
            ],
        ]);
    }
}
