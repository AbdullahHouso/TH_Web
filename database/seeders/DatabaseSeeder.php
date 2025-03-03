<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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

        Category::create([
            'name' => 'Electronics',
            'description' => 'All electronic items'
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'All clothing items'
        ]);

        Product::factory()->count(5)->create([
            'category_id' => 2
        ]);

        Product::create([
            'company' => 'Apple',
            'model' => 'iPhone 16 Pro Max',
            'price' => 5000,
            'sku_id' => 'ijfiejf9j93jf',
            'category_id' => 1
        ]);

        Product::create([
            'company' => 'Samsung',
            'model' => 'Galaxy S25 Ultra',
            'price' => 5100,
            'sku_id' => 'fjfiejf9j93jf',
            'category_id' => 1
        ]);
    }
}
