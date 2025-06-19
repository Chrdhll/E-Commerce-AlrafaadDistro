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
            'category_id' => 1,
            'name' => 'Kaos polos hitam',
            'slug' => 'kaos-polos-hitam',
            'description' => 'Kaos polos hitam kualitas premium',
            'price' => 100000,
            'stock' => 10,
            'image' => 'kaos.jpg',
        ]);
    }
}
