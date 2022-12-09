<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Owner\MobilController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

Route::get('mobil',[MobilController::class, 'index']);
Route::post('mobil/add',[MobilController::class, 'add']);
