<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/', [AdminController::class, 'home'])->name('admin.frontend.homepage');
Route::get('/detail', [AdminController::class, 'detail'])->name('admin.frontend.detail');
Route::get('/contact', [AdminController::class, 'contact'])->name('admin.frontend.contact');
// Route Logout
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Route CRUD Review Mobil
Route::prefix('review')->group(function () {
    Route::get('/view', [BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add', [BarangController::class, 'BarangAdd'])->name('barang.add');
    // Route::post('/store', [BarangController::class, 'BarangRequest'])->name('barang.request');
    // Route::get('/edit/{id}', [BarangController::class, 'BarangEdit'])->name('barang.edit');
    // Route::post('/update/{id}', [BarangController::class, 'BarangUpdate'])->name('barang.update');
    
});
