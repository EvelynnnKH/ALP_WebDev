<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'order_id' => 1,
                'user_id' => 16,
                'order_date' => '2025-05-20',
                'status' => 'Completed',
                'total_price' => 110000,
                'shipping_address' => 'Jl. Mayjen Sungkono No.45, Surabaya',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'user_id' => 3,
                'order_date' => '2025-05-02',
                'status' => 'Shipped',
                'total_price' => 200000,
                'shipping_address' => 'Jl. Sudirman No. 5, Bandung',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 3,
                'user_id' => 4,
                'order_date' => '2025-05-03',
                'status' => 'Delivered',
                'total_price' => 175000,
                'shipping_address' => 'Jl. Pemuda No. 8, Surabaya',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 4,
                'user_id' => 5,
                'order_date' => '2025-05-04',
                'status' => 'Cancelled',
                'total_price' => 100000,
                'shipping_address' => 'Jl. Imam Bonjol No. 2, Medan',
                'status_del' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 5,
                'user_id' => 6,
                'order_date' => '2025-05-05',
                'status' => 'Processing',
                'total_price' => 225000,
                'shipping_address' => 'Jl. Malioboro No. 1, Yogyakarta',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 6,
                'user_id' => 7,
                'order_date' => '2025-05-06',
                'status' => 'Delivered',
                'total_price' => 180000,
                'shipping_address' => 'Jl. Merdeka No. 10, Jakarta',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 7,
                'user_id' => 2,
                'order_date' => '2025-05-07',
                'status' => 'Shipped',
                'total_price' => 160000,
                'shipping_address' => 'Jl. Sudirman No. 5, Bandung',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 8,
                'user_id' => 3,
                'order_date' => '2025-05-08',
                'status' => 'Processing',
                'total_price' => 190000,
                'shipping_address' => 'Jl. Pemuda No. 8, Surabaya',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 9,
                'user_id' => 4,
                'order_date' => '2025-05-09',
                'status' => 'Delivered',
                'total_price' => 140000,
                'shipping_address' => 'Jl. Imam Bonjol No. 2, Medan',
                'status_del' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 10,
                'user_id' => 5,
                'order_date' => '2025-05-10',
                'status' => 'Cancelled',
                'total_price' => 110000,
                'shipping_address' => 'Jl. Malioboro No. 1, Yogyakarta',
                'status_del' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
