<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckAllCompanyInHouseTest extends TestCase
{
    /**
     * Тест для проверка получения всех компаний в здании
     */
    public function test_example(): void
    {
        $response = $this->post('/AllCompany' , [
            'addres' => 'г. Москва, ул. Ленина 1'
        ] , [
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJuYW1lIjoiQWRtaW4iLCJwYXNzd29yZCI6IiQyeSQxMiRZZldodFBzOEwxS09QVWxiUTk4ZHFleVNaN1hxMXhJRGxrMXk0a09tb2VkcDFYcVVxM3h4MiJ9.Ap9mYBZ_i1uJcJQk4bQ_Ug5W9ZE8Pn2-tT0kz0zbuD8'
        ]);

        $response->assertStatus(200);
    }
}
