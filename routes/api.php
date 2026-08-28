<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/me', [AuthController::class, 'me']);

    Route::post('/logout', [AuthController::class, 'logout']);

});

Route::post('/addcompany', [CompanyController::class, 'store']);

Route::get('/companies', [CompanyController::class, 'index']);

Route::put('/company/{company}/update', [CompanyController::class, 'update']);

Route::delete('/company/{company}/delete', [CompanyController::class, 'delete']);

