<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->group(function () {
});

Route::apiResource('users', UserController::class);
// Route::get('/users', [UserController::class, 'get']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::patch('/users', [UserController::class, 'update']);
// Route::delete('/users', [UserController::class, 'destroy']);
// Route::post('/users', [UserController::class, 'store']);
