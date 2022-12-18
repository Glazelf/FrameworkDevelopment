<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class unitTest extends TestCase
{
    /** @test */
    public function unitTest()
    {
        // Test page responses
        $responseBase = $this->get('/');
        $responseBase->assertStatus(200);
        $responseDash = $this->get('/dashboard');
        $responseDash->assertStatus(200);
        $responseLogin = $this->get('/login');
        $responseLogin->assertStatus(200);
        $responseRegister = $this->get('/register');
        $responseRegister->assertStatus(200);
        $response404 = $this->get('/404test');
        $response404->assertStatus(200);
    }
}