<?php

namespace App\Service;

use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\Key;

class CompanyService {

    public function CheckPasswordFromJwtToken($token) {

        $Admin = User::where('name' , 'Admin')->first();

        if($Admin->remember_token == $token) {

        $key = 'Nebus'; // ! в Postman не нужно шифровать ключ !, потому что он шифрует некорректно, поэтому проверям открыто
        
        $decoded = JWT::decode($token, new Key($key, 'HS256')); 

        return $Admin->password == $decoded->password ? true : false;

        } else {

            return false;
        }
    }
}