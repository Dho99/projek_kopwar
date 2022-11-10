<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/orders', function () {
    return view('orders.index', [
        "title" => "Orders"
    ]);
})->middleware('auth');

Route::get('/products', [ProductsController::class, 'list'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/simpanan', [SimpananController::class, 'index'])->middleware('auth');

Route::get('/pinjaman', [PinjamanController::class, 'index'])->middleware('auth');

Route::get('/members', [MemberController::class, 'index'])->middleware('auth');
