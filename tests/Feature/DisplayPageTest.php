<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Routes\Web;

class DisplayPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_display()
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    public function test_checkout_display()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
        $response->assertViewIs('checkout');
    }

        public function test_contact_display()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contactus');
    }

    public function test_confirm_display()
    {
        $response = $this->get('/confirm');

        $response->assertStatus(200);
        $response->assertViewIs('confirmation');
    }

        public function test_dashboard_display()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard');
    }

        public function test_login_display()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('loginPage');
    }

    //     public function test_orders_display()
    // {
    //     $response = $this->get('/orders');

    //     $response->assertStatus(200);
    // }

        public function test_store_display()
    {
        $response = $this->get('/store');

        $response->assertStatus(200);
        $response->assertViewIs('storePage');
    }

        public function test_error_display()
    {
        $response = $this->get('/{any}');

        $response->assertStatus(200);
        $response->assertViewIs('pagenotfound');
    }
}
