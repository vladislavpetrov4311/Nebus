<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyRestController;
use App\Http\Controllers\GetCompanyController;
use App\Http\Controllers\GetJwtTokenController;

Route::get('Company' , CompanyRestController::class);
Route::post('AllCompany' , GetCompanyController::class);
Route::get('GetToken' , GetJwtTokenController::class);
