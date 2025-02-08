<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;

class CompanyRestController extends Controller {

    public function __invoke(CompanyRequest $request) {
        dd($request->header('key_token'));
    }

}