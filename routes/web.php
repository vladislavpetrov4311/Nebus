<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyRestController;
use App\Http\Controllers\GetCompanyController;

Route::get('Company' , CompanyRestController::class);
Route::post('AllCompany' , GetCompanyController::class);