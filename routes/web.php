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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/orders', function () {
    return view('orders.index', [
        "title" => "Orders"
    ]);
});

Route::get('/products', [ProductsController::class, 'list']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/simpanan', [SimpananController::class, 'index']);

Route::get('/pinjaman', [PinjamanController::class, 'index']);

Route::get('/members', [MemberController::class, 'index']);
