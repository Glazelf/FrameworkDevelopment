<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class loginTests extends TestCase
{
    /** @test */
    public function loginHappyPathTest()
    {
        {
            $response = $this->json('POST',
            '/login', [
                'email' => 'test@gmail.com',
                'password' => 't3$stP@ssw0rd'
                ]
            );
            $response->assertSessionHasNoErrors(['email', 'password']);
        }
    }
    /** @test */
    public function loginUnhappyPathTest()
    {
        $response = $this->json('POST',
        '/login', [
            'email' => 'test@gmail.com',
            'password' => 'Wr0NgP@ssw0rd'
            ]
        );
        $response->assertSessionHasErrors(['email', 'password']);
    }
}