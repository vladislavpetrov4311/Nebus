<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckGetJwtTokenTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/GetToken');
        $response->json()!=0 ? $stastus = true : $stastus = false;
        $this->assertTrue($stastus);
    }
}
