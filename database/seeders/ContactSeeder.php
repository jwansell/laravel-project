<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $contact = Contact::factory()->create([
            'fname' => 'Joe',
            'lname' => 'Ansell',
            'email' => 'joseph.ansell@yourmeds.net',
            'message' => 'I love messages',
        ]);
        Contact::factory()->create([
            'fname' => 'michael',
            'lname' => 'sievenpieper',
            'email' => 'michael.sievenpieper@yourmeds.net',
            'message' => 'This is a great message',
        ]);
        Contact::factory()->create([
            'fname' => 'Carter',
            'lname' => 'Richards',
            'email' => 'CSrichards@realwebsite.co.uk',
            'message' => 'A sandwich is a food',
        ]);
    }
}
