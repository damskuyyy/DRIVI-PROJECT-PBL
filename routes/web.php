<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Owner\ReviewController;
use App\Http\Controllers\Owner\AddController;
use App\Http\Controllers\Owner\DeleteController;
use App\Http\Controllers\Owner\EditController;
use App\Http\Controllers\Owner\ListController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\TransactionController;

use App\Http\Controllers\User\MobilController;
use App\Http\Controllers\User\SewaController;


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

Route::prefix('owner')->group(function () {
    Route::get('/dashboard', [OwnerController::class, 'index'])->name('owner.dashboard');
    Route::get('/delete/{id}', [DeleteController::class, 'mobilDelete'])->name('owner.mobil_delete');
    Route::get('/add', [AddController::class, 'add'])->name('owner.add');
    Route::get('/list', [ListController::class, 'list'])->name('owner.list');
    Route::get('/review', [ReviewController::class, 'review'])->name('owner.review_mobil');
    Route::get('/edit', [EditController::class, 'edit'])->name('owner.edit_mobil');
    Route::post('/store', [AddController::class, 'mobilStore'])->name('owner.mobilStore');
    Route::get('/transaksi/list', [TransactionController::class, 'listTransaksi'])->name('transaksi.list');
});
    

Route::get('/user/home',function(){
    return view('user.homepage');
})->name('user.home');

Route::prefix('user')->group(function () {
    Route::get('/home', [MobilController::class, 'viewMobil'])->name('user.home');
    Route::get('/detail', [AdminController::class, 'detail'])->name('user.list');
    Route::get('/contact', [AdminController::class, 'contact'])->name('user.contact');
    Route::get('/transaksi/add/{id}',[SewaController::class, 'sewaAdd'])->name('user.sewa_add');
    Route::post('/transaksi/create',[SewaController::class, 'sewaCreate'])->name('user.sewa_mobil');
    Route::get('/sewa/list', [SewaController::class, 'sewaList'])->name('user.sewa.list');

});

Route::get('/home',function(){
    return view('user.index');
})->name('home');


// Route Homepage
// Route::get('/', [AdminController::class, 'home'])->name('admin.frontend.index');
Route::get('user/detail', [AdminController::class, 'detail'])->name('user.detail');
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


// Route::prefix('transaksi')->group(function () {
//     Route::get('/list', [TransactionController::class, 'listTransaksi'])->name('transaksi.list');
//     // Route::get('/pending', [TransactionController::class, 'add'])->name('transaction.pending');
// });