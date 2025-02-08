<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Service\CompanyService;

class CompanyRestController extends Controller {

    public function __invoke(CompanyRequest $request, CompanyService $service) {

        $token = $request->bearerToken(); // Получение токена Админа

        return $service->CheckPasswordFromJwtToken($token) // Проверка пароля
        ? response()->json(["Response" => "Accepted password"], 200)
        : response()->json(["Response" => "Invalid password Or Token"], 401);
    }

}