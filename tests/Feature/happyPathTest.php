<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class happyPathTest extends TestCase
{
    /** @test */
    public function happyPathTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->json('POST',
        '/register', [
            'name'=> 'test',
            'email' => 'test@gmail.com',
            'password' => 't3$stP@ssw0rd'
            ]
        );
        $response->assertSessionHasNoErrors(['name', 'email', 'password']);
    }
}