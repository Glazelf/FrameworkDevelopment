<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class happyPathTest extends TestCase
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
            'name'=> 'test',
            'email' => 'test@gmail.com',
            'password' => 't3$stP@ssw0rd'
        ]);
        fwrite(STDERR, print_r($response, TRUE));
        $response->assertStatus(200);
    }
}