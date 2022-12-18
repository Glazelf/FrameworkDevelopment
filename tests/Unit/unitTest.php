<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class unitTest extends TestCase
{
    /** @test */
    public function unitTest()
    {
        // Test page responses
        $response = $this->get('/');
        $response->assertStatus(200);
        $response = $this->get('/dashboard');
        $response->assertStatus(200);
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response = $this->get('/404test');
        $response->assertStatus(200);
    }
}