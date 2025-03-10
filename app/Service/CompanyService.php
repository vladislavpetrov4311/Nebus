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
use Exception;

class CompanyService {

    /**
     * @Метод получения токена
     */
    public function GetJwtToken()
    {
        $Admin = User::where('name' , 'Admin')->first();
        $payload = [
            'id' => $Admin->id,
            'name' => $Admin->name,
            'password' => $Admin->password
        ];
        $key = 'Nebus';
        $Jwt = JWT::encode($payload , $key , 'HS256');

        return empty(!$Jwt) ? true : false;
    }

    /**
     * @Метод проверки токена
     */
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

    /**
     * @Метод получения списка компаний в конкретном здании
     */
    public function GetAllCompanyInHouse($request) {
        try {

            if($this->CheckPasswordFromJwtToken($request->bearerToken())) {

                $House = House::where('addres' , $request->validated()['addres'])->first();

                if(!$House) {
                    throw new Exception("Invalid addres House");
                }

                return CompanyResource::collection($House->company);

            } else {
                throw new Exception("Invalid token");
                }
        } catch(Exception $e) {

            return response()->json(['Response' => $e->getMessage()], 401);
        }
    }
}
