<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Owner\MobilController;
use App\Http\Controllers\API\Transaction\TransactionController;
use App\Http\Controllers\API\Owner\ReviewController;
use App\Http\Controllers\API\Owner\ReviewMobilController;
use App\Models\ReviewMobil;
use App\Http\Controllers\API\Owner\OwnerDetailController;
use App\Http\Controllers\API\BarangController;
use App\Http\Controllers\API\BolaController;
use App\Http\Controllers\API\SoalController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
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
Route::get('userDetail',[UserDetailController::class, 'index']);
Route::post('userDetail/add',[UserDetailController::class, 'add']);

Route::group(['prefix' => 'owner'], function () {
    // Route::group(['middleware' => 'auth:api'], function () {
        Route::get('OwnerDetail',[OwnerDetailController::class, 'index']);
        Route::post('OwnerDetail/add',[OwnerDetailController::class, 'add']);
        Route::put ('OwnerDetail/update/{id}', [OwnerDetailController::class, 'update']);
        Route::delete('delete/{id}', [OwnerDetailController::class, 'delete']);
    });
Route::prefix('/barang')->group(function(){
    Route::get('/view',[BarangController::class, 'BarangView']);
    Route::post('/add',[BarangController::class, 'BarangAdd']);
    Route::put('/update/{id}',[BarangController::class, 'BarangUpdate']);
    Route::delete('/delete/{id}',[BarangController::class, 'BarangDelete']);
});
Route::prefix('/bola')->group(function(){
    Route::get('/view',[BolaController::class, 'BolaView']);
    Route::post('/add',[BolaController::class, 'BolaAdd']);
    Route::put('/update/{id}',[BolaController::class, 'BolaUpdate']);
    Route::delete('/delete/{id}',[BolaController::class, 'BolaDelete']);
});
Route::prefix('/soal')->group(function(){
    Route::get('/view',[SoalController::class, 'SoalView']);
    Route::post('/add',[SoalController::class, 'SoalAdd']);
    Route::put('/update/{id}',[SoalController::class, 'SoalUpdate']);
    Route::delete('/delete/{id}',[SoalController::class, 'SoalDelete']);
});