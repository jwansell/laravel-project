<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderProduct;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order_product = OrderProduct::factory()->create([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => '1',
        ]);

        OrderProduct::factory()->create([
            'order_id' => '2',
            'product_id' => '2',
            'quantity' => '2',
        ]);

        OrderProduct::factory()->create([
            'order_id' => '3',
            'product_id' => '3',
            'quantity' => '4',
        ]);
    }
}
