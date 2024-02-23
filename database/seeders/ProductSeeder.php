<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name_uz' => 'Category Uz 1',
            'name_en' => 'Category en 1',
        ]) ;
        Product::create([
            'category_id' => 1 ,
            'name_uz' => 'Product uz 1',
            'name_en' => 'Product uz 1',
            'price' => 100,
            'photo' => null,
        ]) ;

        Product::create([
            'category_id' => 1 ,
            'name_uz' => 'Product uz 2',
            'name_en' => 'Product uz 2',
            'price' => 234,
            'photo' => null,
        ]) ;

        // Product::factory(50000)->create();
    }
}
