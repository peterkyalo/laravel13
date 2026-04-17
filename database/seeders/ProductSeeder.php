<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('slug', 'electronics')->first();
        if(!$category) {
            return;
        }
        Product::create([
            'category_id' => $category->id,
            'name' => 'iPhone 15',
            'slug' => 'iphone-15',
            'description' => 'The latest iPhone with advanced features and improved performance.',
            'short_description' => 'The latest iPhone with advanced features.',
            'price' => 999.99,
            'sale_price' => 899.99,
            'sku' => 'IPH15-BLK-128GB',
            'stock' => 50,
            'featured' => 1,
            'meta_title' => 'Buy iPhone 15 Online',
            'meta_description' => 'Get the latest iPhone 15 with advanced features and improved performance. Available now at our store.',
            'meta_keywords' => 'iPhone 15',
        ]);
        Product::create([
            'category_id' => $category->id,
            'name' => 'Samsung Galaxy S23',
            'slug' => 'samsung-galaxy-s23',
            'description' => 'The Samsung Galaxy S23 offers a stunning display and powerful performance.',
            'short_description' => 'The Samsung Galaxy S23 with stunning display.',
            'price' => 899.99,
            'sale_price' => 799.99,
            'sku' => 'SGS23-BLK-128GB',
            'stock' => 30,
            'featured' => 0,
            'meta_title' => 'Buy Samsung Galaxy S23 Online',
            'meta_description' => 'Get the Samsung Galaxy S23 with a stunning display and powerful performance. Available now at our store.',
            'meta_keywords' => 'Samsung Galaxy S23',
        ]);
    }
}