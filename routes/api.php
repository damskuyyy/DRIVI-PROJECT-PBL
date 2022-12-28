<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Owner\MobilController;
use App\Http\Controllers\API\Transaction\TransactionController;
use App\Http\Controllers\API\Owner\ReviewController;
use App\Http\Controllers\API\Owner\ReviewMobilController;
use App\Models\ReviewMobil;
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

Route::prefix('/mobil')->group(function(){
    Route::get('/view',[MobilController::class, 'MobilView']);
    Route::post('/add',[MobilController::class, 'MobilAdd']);
    // Route::post('/add/{id}',[MobilController::class, 'MobilAdd'])->middleware('auth:sanctum');
    Route::put('/update/{id}',[MobilController::class, 'MobilUpdate']);
    Route::delete('/delete/{id}',[MobilController::class, 'MobilDelete']);
});

// route crud review
Route::get('review',[ReviewController::class, 'index']);
Route::post('review/add',[ReviewController::class, 'add']);
Route::put('review/update/{id}',[ReviewController::class, 'Update']);
Route::delete('review/delete/{id}',[ReviewController::class, 'Delete']);


Route::prefix('/sewa')->group(function(){
    Route::get('/view',[TransactionController::class, 'TransactionView']);
    Route::post('/add',[TransactionController::class, 'TransactionAdd']);
    Route::put('/update/{id}',[TransactionController::class, 'TransactionUpdate']);
    Route::delete('/delete/{id}',[TransactionController::class, 'TransactionDelete']);
});