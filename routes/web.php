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


// Jangan dihapus
// Route::prefix('user')->group(function(){
//     Route::get('/user/view',[UserController::class, 'UserView'])->name('user.view');
//     Route::get('/user/add',[UserController::class, 'UserAdd'])->name('user.add');
//     Route::post('/user/store',[UserController::class, 'UserStore'])->name('users.store');
//     Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
//     Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
//     Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
// });

// Route Homepage
Route::get('/homepage', [AdminController::class, 'home'])->name('admin.frontend.homepage');
Route::get('/detail', [AdminController::class, 'detail'])->name('admin.frontend.detail');
Route::get('/contact', [AdminController::class, 'contact'])->name('admin.frontend.contact');
// Route Logout
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

