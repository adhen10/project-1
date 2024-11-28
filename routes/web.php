<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function () {
	Route::get('/', [AuthController::class, 'index'])->name('login');
	Route::post('/', [AuthController::class, 'login'])->name('login');
});

Route::get('/home', function () {
	return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {
	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
});
