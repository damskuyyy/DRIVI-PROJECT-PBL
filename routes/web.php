<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\OwnerController;
use App\Http\Controllers\Backend\BarangController;
use App\Http\Controllers\Backend\BukuController;
use App\Http\Controllers\Backend\KendaraanController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admin_master');
    })->name('dashboard');
});

// Route Homepage
Route::get('/homepage', [AdminController::class, 'home'])->name('admin.frontend.homepage');
Route::get('/detail', [AdminController::class, 'detail'])->name('admin.frontend.detail');
Route::get('/contact', [AdminController::class, 'contact'])->name('admin.frontend.contact');
// Route Logout
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
    
});

Route::prefix('barangs')->group(function(){
    Route::get('/view',[BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add',[BarangController::class, 'BarangAdd'])->name('barang.add');
    Route::post('/store',[BarangController::class, 'BarangStore'])->name('barang.store');
});

Route::prefix('buku')->group(function(){
    Route::get('/view',[BukuController::class, 'BukuView'])->name('buku.view');
    Route::get('/add',[BukuController::class, 'BukuAdd'])->name('buku.add');
    Route::post('/store',[BukuController::class, 'BukuStore'])->name('buku.store');
});

Route::prefix('kendaraan')->group(function(){
    Route::get('/view',[KendaraanController::class, 'KendaraanView'])->name('kendaraan.view');
    Route::get('/add',[KendaraanController::class, 'KendaraanAdd'])->name('kendaraan.add');
    Route::post('/store',[KendaraanController::class, 'KendaraanStore'])->name('kendaraan.store');
});