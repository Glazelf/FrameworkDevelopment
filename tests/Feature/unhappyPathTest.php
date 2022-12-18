<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class unhappyPathTest extends TestCase
{
    /** @test */
    public function unhappyPathTest()
    {
        Session::start();
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->json('POST',
        '/register', [
            'name' => '',
            'email' => 'notanemail',
            'password' => '1234567'
            ]
        );
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }
}