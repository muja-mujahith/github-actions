<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HealthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_health_endpoint()
    {
        $response = $this->get('/health');
        $response->assertStatus(200)
            ->assertJson(['status' => 'ok']);
    }
}
