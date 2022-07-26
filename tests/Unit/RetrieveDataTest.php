<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
Use App\Models\Contact;

class RetrieveDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_retrieve_contacts()
    {
        $response = $this->get('/contact');

        $this->assertDatabaseHas('contacts', [
                'fname' => 'Dummy',
                'lname' => 'Dummy',
                'message' => 'This is a dummy message, written to fill space and test how long stretches of text might display on a page.',
        ]);
        //This passes, but probably need to change what the test actually does. Probably something that verifies the data is being sent to/displayed on page
    }

     public function test_retrieve_products()
    {
        $response = $this->get('/store');

        $this->assertDatabaseHas('products', [
                'item' => 'Test Item',
                'price' => '£3.99',
                'stock' => '5',
        ]);
    }

        public function test_retrieve_addresses()
    {
        $response = $this->get('/confirm');

        $this->assertDatabaseHas('addresses', [
                'address' => 'Dummy',
                'city' => 'Dummy',
                'postcode' => 'Dummy',
                'county' => 'Dummy!',
        ]);
    }

        public function test_retrieve_orders()
    {
        $response = $this->get('/orders');

        $this->assertDatabaseHas('orders', [
                'item' => 'Test Item',
                'order_value' => '£1.99',
        ]);
    }

        public function test_retrieve_order_products()
    {
        $response = $this->get('/orders');
        $response = $this->get('/confirm');

        $this->assertDatabaseHas('order_products', [
                'Quantity' => '1',
        ]);
    }
}
