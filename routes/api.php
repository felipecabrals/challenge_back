<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware(['apiJWT'])->group(function () {
    Route::post('/auth/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::post('/register', [\App\Http\Controllers\Api\UserController::class, 'store']);
    Route::get('/users', [\App\Http\Controllers\Api\UserController::class, 'index']);
    Route::get('/show/{user}', [\App\Http\Controllers\Api\UserController::class, 'show']);
    Route::put('/update/{user}', [\App\Http\Controllers\Api\UserController::class, 'update']);
    Route::delete('/destroy/{user}', [\App\Http\Controllers\Api\UserController::class, 'destroy']);
});
