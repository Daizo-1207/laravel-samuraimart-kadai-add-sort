<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ProductFactoryクラスで定義した内容に基づいてダミーデータを20件生成し、productsテーブルに追加する
        product::factory()->count(20)->create();
    }
}
