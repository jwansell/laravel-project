<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Routes\Api;
use App\Models\Contact;
use App\Models\Address;

class InsertDataTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contact_insert()
    {
        //insert dummy data... something with endpoint assertdatabasehas
        $response = $this->get('/api/contact');

        $contact = Contact::factory()->create([
                'fname' => 'Dummy',
                'lname' => 'Dummy',
                'message' => 'This is a dummy message, written to fill space and test how long stretches of text might display on a page.',
            ]);

        $this->assertDatabaseHas('contacts', [
                'fname' => 'Dummy',
                'lname' => 'Dummy',
                'message' => 'This is a dummy message, written to fill space and test how long stretches of text might display on a page.',
            ]);

    }

    public function test_checkout_insert()
    {
        $response = $this->get('api/checkout');

        $address = Address::factory()->create([
                'user_id' => '1',
                'order_id' => '1',
                'address' => 'Dummy',
                'postcode' => 'Dummy',
                'city' => 'Dummy',
                'county' => 'Dummy!',
            ]);

        $this->assertDatabaseHas('addresses', [
                'user_id' => '1',
                'order_id' => '1',
                'address' => 'Dummy',
                'postcode' => 'Dummy',
                'city' => 'Dummy',
                'county' => 'Dummy!',            
            ]);

    }
}
