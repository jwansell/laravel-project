<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $address = Address::factory()->create([
            'user_id' => '1',
            'order_id' => '1',
            'address' => 'Test Street',
            'postcode' => 'TO12 TDE',
            'city' => 'Testville',
            'county' => 'Testshire',
        ]);

        Address::factory()->create([
            'user_id' => '2',
            'order_id' => '2',
            'address' => 'Baker Lane',
            'postcode' => 'BE23 FG2',
            'city' => 'Bumpton',
            'county' => 'Blodgeley',
        ]);
    }
}
