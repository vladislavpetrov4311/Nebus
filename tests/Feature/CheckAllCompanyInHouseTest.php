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
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibmFtZSI6IkFkbWluIiwicGFzc3dvcmQiOiIkMnkkMTIkWWZXaHRQczhMMUtPUFVsYlE5OGRxZXlTWjdYcTF4SURsazF5NGtPbW9lZHAxWHFVcTN4eDIifQ.A_-vlCzyCWg3OPjPMhGZmAWqJHhF8hM4aqyhmnlpmtI'
        ]);

        $response->assertStatus(200);
    }
}
