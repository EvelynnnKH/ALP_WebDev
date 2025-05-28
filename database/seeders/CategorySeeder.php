<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'name' => 'Scented Candle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 2,
                'name' => 'Candle Accessories',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 3,
                'name' => 'Wax Melt',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 4,
                'name' => 'Decorative Candle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 5,
                'name' => 'Bath Bombs',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 6,
                'name' => 'Aromaterapi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 7,
                'name' => 'Seasonal Candle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 8,
                'name' => 'Essential Oils',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 9,
                'name' => 'Candle Making Kit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 10,
                'name' => 'Diffuser',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 11,
                'name' => 'Unscented Candle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 12,
                'name' => 'Handmade Soaps',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
            [
                'category_id' => 13,
                'name' => 'Gift Boxes & Sets',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status_del' => 0,
            ],
        ]);

    }
}
