<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth as Auth;

use function PHPSTORM_META\type;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.admin_master');
//     })->name('dashboard');
// });

Route::get('/', [HomeController::class, 'checkUserType']);
    
Route::get('/admin/dashboard',function(){
    return view('admin.admin_master');
})->name('admin.dashboard');

Route::get('/owner/dashboard',function(){
    return view('owner.owner_master');
})->name('owner.dashboard');

Route::get('/user/home',function(){
    return view('user.homepage');
})->name('user.home');

Route::get('/home',function(){
    return view('user.index');
})->name('home');


// Route Homepage
// Route::get('/', [AdminController::class, 'home'])->name('admin.frontend.index');
Route::get('users/detail', [AdminController::class, 'detail'])->name('user.detail');
Route::get('user/contact', [AdminController::class, 'contact'])->name('user.contact');
// Route Logout
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('user/logout', [HomeController::class, 'logout'])->name('logout');
// Route::get('/owner/logout', [AdminController::class, 'logout'])->name('ologout');

// Route CRUD Review Mobil
Route::prefix('review')->group(function () {
    Route::get('/view', [BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add', [BarangController::class, 'BarangAdd'])->name('barang.add');
    // Route::post('/store', [BarangController::class, 'BarangRequest'])->name('barang.request');
    // Route::get('/edit/{id}', [BarangController::class, 'BarangEdit'])->name('barang.edit');
    // Route::post('/update/{id}', [BarangController::class, 'BarangUpdate'])->name('barang.update');
    
});
