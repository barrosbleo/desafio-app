<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone Android',
            'price' => '1250.90',
            'user_id' => '1',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Notebook Intel Celeron',
            'price' => '2180.90',
            'user_id' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Notebook AMD Ryzen5',
            'price' => '4990.00',
            'user_id' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Computador Intel Core i7',
            'price' => '3899.90',
            'user_id' => '1',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Computador Intel Core i9',
            'price' => '7899.99',
            'user_id' => '2',
            'category_id' => '3'
        ]);
    }
}