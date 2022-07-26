<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logout()
    {
             $this->assertGuest($guard = null);
             $this->assertSessionMissing('basket');
             //assert that session is destroyed also maybe?
    }

}
