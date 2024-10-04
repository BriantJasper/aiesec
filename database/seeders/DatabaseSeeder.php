<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'is_admin' => true
        ]);

        Purchase::create([
            'product_id' => rand(1, 15),
            'user_id' => 1,
        ]);

        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-1.png',
            'product_name' => 'Product 1',
            'manufacturing_cost' => 50000,
            'sell_price' => 120000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-2.png',
            'product_name' => 'Product 2',
            'manufacturing_cost' => 85000,
            'sell_price' => 140000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-3.png',
            'product_name' => 'Product 3',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-4.png',
            'product_name' => 'Product 4',
            'manufacturing_cost' => 85000,
            'sell_price' => 180000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-5.png',
            'product_name' => 'Product 5',
            'manufacturing_cost' => 57000,
            'sell_price' => 185000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-6.png',
            'product_name' => 'Product 6',
            'manufacturing_cost' => 76000,
            'sell_price' => 60000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-7.png',
            'product_name' => 'Product 7',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-8.png',
            'product_name' => 'Product 8',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-9.png',
            'product_name' => 'Product 9',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-10.png',
            'product_name' => 'Product 10',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-11.png',
            'product_name' => 'Product 11',
            'manufacturing_cost' => 95000,
            'sell_price' => 170000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-12.png',
            'product_name' => 'Product 12',
            'manufacturing_cost' => 35000,
            'sell_price' => 97000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-13.png',
            'product_name' => 'Product 13',
            'manufacturing_cost' => 45000,
            'sell_price' => 74000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-14.png',
            'product_name' => 'Product 14',
            'manufacturing_cost' => 48000,
            'sell_price' => 97000,
        ]);
        Product::create([
            'stock' => 10,
            'description' => 'AIESEC MERCHANDISE',
            'image_url' => '/images/products/product-15.png',
            'product_name' => 'Product 15',
            'manufacturing_cost' => 37000,
            'sell_price' => 100000,
        ]);
    }
}
