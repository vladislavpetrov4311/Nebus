<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CompanyService;

class GetJwtTokenController extends Controller
{
    public  function  __invoke(CompanyService $service) {
        $service->GetJwtToken();
    }
}
