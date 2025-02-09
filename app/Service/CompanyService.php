<?php

namespace App\Service;

use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\Key;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\House;
use App\Http\Resources\CompanyResource;

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

    public function GetAllCompanyInHouse($request) {

        if($this->CheckPasswordFromJwtToken($request->bearerToken())) {
            $House = House::where('addres' , $request->validated()['addres'])->first();
            $Companies = Company::where('house_id' , $House->id)->get();
            
            return CompanyResource::collection($Companies);
        }
        
    }
}