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
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJuYW1lIjoiQWRtaW4iLCJwYXNzd29yZCI6IiQyeSQxMiRZZldodFBzOEwxS09QVWxiUTk4ZHFleVNaN1hxMXhJRGxrMXk0a09tb2VkcDFYcVVxM3h4MiJ9.Ap9mYBZ_i1uJcJQk4bQ_Ug5W9ZE8Pn2-tT0kz0zbuD8'
        ]);

        $response->assertStatus(200);
    }
}
