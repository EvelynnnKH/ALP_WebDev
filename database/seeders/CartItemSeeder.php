<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cart_items')->insert([
            [
                'cart_item_id' => 1,
                'cart_id' => 16,
                'product_id' => 2,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 2,
                'cart_id' => 16,
                'product_id' => 5,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 3,
                'cart_id' => 16,
                'product_id' => 7,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 4,
                'cart_id' => 2,
                'product_id' => 1,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 5,
                'cart_id' => 3,
                'product_id' => 4,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 6,
                'cart_id' => 3,
                'product_id' => 8,
                'quantity' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 7,
                'cart_id' => 4,
                'product_id' => 10,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 8,
                'cart_id' => 5,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 9,
                'cart_id' => 5,
                'product_id' => 11,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 10,
                'cart_id' => 6,
                'product_id' => 2,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 11,
                'cart_id' => 6,
                'product_id' => 10,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 12,
                'cart_id' => 7,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 13,
                'cart_id' => 7,
                'product_id' => 14,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 14,
                'cart_id' => 7,
                'product_id' => 15,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
            [
                'cart_item_id' => 15,
                'cart_id' => 8,
                'product_id' => 15,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'status_del' => 0,
            ],
        ]);
    }
}
