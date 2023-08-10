<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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
//     return view('index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('kerjasama', KerjasamaController::class);
});
Route::get('/kerjasama/kategori/{id}', [KerjasamaController::class, 'kategori'])->name('kerjasama.kategori');

Route::get('/email', [EmailController::class, 'index'])->name('email.index');
Route::post('/email/send', [EmailController::class, 'sendEmail'])->name('send.email');