<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = Product::factory()->create([
            'item' => 'Test Item',
            'price' => '£3.99',
            'stock' => '5',
        ]);

        Product::factory()->create([
            'item' => 'Club Sandwich',
            'price' => '£4.99',
            'stock' => '50',
        ]);

        Product::factory()->create([
            'item' => 'BLT',
            'price' => '£4.99',
            'stock' => '100',
        ]);

        // $counter = 0;
        // while($counter < 1000) {
        //     Product::factory()->create();
        //     $counter++;
        // }
    }
}
