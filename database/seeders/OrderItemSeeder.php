<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'price' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 5,
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 4,
            ],
            [
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 3,
                'price' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 3,
            ],
            [
                'order_id' => 2,
                'product_id' => 6,
                'quantity' => 1,
                'price' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 5,
            ],
            [
                'order_id' => 3,
                'product_id' => 5,
                'quantity' => 2,
                'price' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 4,
            ],
            [
                'order_id' => 4,
                'product_id' => 10,
                'quantity' => 1,
                'price' => 62000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 5,
            ],
            [
                'order_id' => 5,
                'product_id' => 12,
                'quantity' => 1,
                'price' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 3,
            ],
            [
                'order_id' => 6,
                'product_id' => 15,
                'quantity' => 1,
                'price' => 180000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 5,
            ],
            [
                'order_id' => 6,
                'product_id' => 14,
                'quantity' => 2,
                'price' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
                'rating' => 5,
            ],
        ]);
    }
}
