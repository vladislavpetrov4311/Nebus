<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckPasswordFromJwtTokenTest extends TestCase
{
    /**
     * Тест для проверки токена
     */
    public function test_example(): void
    {
        $response = $this->get('Company' , [
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibmFtZSI6IkFkbWluIiwicGFzc3dvcmQiOiIkMnkkMTIkWWZXaHRQczhMMUtPUFVsYlE5OGRxZXlTWjdYcTF4SURsazF5NGtPbW9lZHAxWHFVcTN4eDIifQ.A_-vlCzyCWg3OPjPMhGZmAWqJHhF8hM4aqyhmnlpmtI'
        ]);

        $response->assertStatus(200);
    }
}
