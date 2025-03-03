<?php

namespace Database\Seeders;

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

        Product::create([
            'company' => 'Apple',
            'model' => 'iPhone 16 Pro Max',
            'price' => 5000,
            'sku_id' => 'ijfiejf9j93jf'
        ]);

        Product::create([
            'company' => 'Samsung',
            'model' => 'Galaxy S25 Ultra',
            'price' => 5100,
            'sku_id' => 'fjfiejf9j93jf'
        ]);
    }
}
