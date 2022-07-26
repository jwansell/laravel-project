<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::factory()->create([
            'username' => 'Admin',
            'password' => 'password',
        ]);

        User::factory()->create([
            'username' => 'jwansell',
            'password' => 'donthackthis',
        ]);

        User::factory()->create([
            'username' => 'testuser',
            'password' => 'testpass',
        ]);
    }
}
