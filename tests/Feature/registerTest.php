<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class registerTests extends TestCase
{
    /** @test */
    public function registerHappyPathTest()
    {
        Session::start();
        $response = $this->json('POST',
        '/register', [
            'name'=> 'test',
            'email' => 'test@gmail.com',
            'password' => 't3$stP@ssw0rd'
            ]
        );
        $response->assertSessionHasNoErrors(['name', 'email', 'password']);
    }

    /** @test */
    public function registerUnhappyPathTest()
    {
        Session::start();
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