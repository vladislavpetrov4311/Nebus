<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\Key;

class CompanyRestController extends Controller {

    public function __invoke(CompanyRequest $request) {

        $token = $request->bearerToken();
    
        $key = 'Nebus'; // ! в Postman не нужно шифровать ключ !, потому что он шифрует некорректно, поэтому проверям открыто

        dd($decoded = JWT::decode($token, new Key($key, 'HS256'))); 
    }

}