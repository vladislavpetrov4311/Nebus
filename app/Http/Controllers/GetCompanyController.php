<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Service\CompanyService;
use App\Http\Requests\CompanyRequest;

class GetCompanyController extends Controller {

    public function __invoke(CompanyService $service, CompanyRequest $request) {

        return $service->GetAllCompanyInHouse($request);
    }
}