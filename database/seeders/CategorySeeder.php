<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Kaos',
            'slug' => 'kaos'
        ]);
        Category::create([
            'name' => 'Jaket',
            'slug' => 'jaket'
        ]);
        Category::create([
            'name' => 'Topi',
            'slug' => 'topi'
        ]);
    }
}
