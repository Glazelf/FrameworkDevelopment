<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class unitTest extends TestCase
{
    /** @test */
    public function unitTest()
    {
        $result = $this->getResponses();
        $this->assertTrue($result[0]);
    }
    // Check all existing pages for status
    protected function getResponses() {
        $response = $this->get('/');
        if ($response->assertStatus(200)) return [false, $response];
        $response = $this->get('/dashboard');
        if ($response->assertStatus(200)) return [false, $response];
        $response = $this->get('/login');
        if ($response->assertStatus(200)) return [false, $response];
        $response = $this->get('/register');
        if ($response->assertStatus(200)) return [false, $response];
        $response = $this->get('/404test');
        if ($response->assertStatus(200)) return [false, $response];
        return [true];
    }
}