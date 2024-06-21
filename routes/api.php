<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;use App\Http\Controllers\API\StartupController;
use App\Http\Controllers\API\InvestorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/startups', [StartupController::class, 'index']);
Route::post('/startups', [StartupController::class, 'store']);
Route::get('/startups/{id}', [StartupController::class, 'show']);
Route::put('/startups/{id}', [StartupController::class, 'update']);
Route::delete('/startups/{id}', [StartupController::class, 'destroy']);



Route::post('/investors', [InvestorController::class, 'store']);

Route::get('/investors', [InvestorController::class, 'index']);
Route::post('/investors', [InvestorController::class, 'store']);
Route::get('/investors/{id}', [InvestorController::class, 'show']);
Route::put('/investors/{id}', [InvestorController::class, 'update']);
Route::delete('/investors/{id}', [InvestorController::class, 'destroy']);
