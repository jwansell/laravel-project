<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order = Order::factory()->create([
            'user_id' => '1',
            'item' => 'Test Item',
            'order_value' => '£1.99',
        ]);

        Order::factory()->create([
            'user_id' => '2',
            'item' => 'Ham Sandwich',
            'order_value' => '£2.99',
        ]);

        Order::factory()->create([
            'user_id' => '3',
            'item' => 'Knuckle Sandwich',
            'order_value' => '£7.99',
        ]);
    }
}
