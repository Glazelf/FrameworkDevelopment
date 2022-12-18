<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class unhappyPathTest extends TestCase
{
    /**
     * Login test
     *
     * @return void
     */
    public function happyPathTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->post('/login', [
            'name'=> '',
            'email' => 'notanemail',
            'password' => '1234567'
        ]);
        fwrite(STDERR, print_r($response, TRUE));
        $response->assertStatus(200);
    }
}