<?php

use App\Http\Controllers\KonserController;
use App\Http\Controllers\KonserOrderController;
use App\Http\Controllers\PurchasesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/konsers/{konser}',[KonserController::class,'show']);
Route::post('/purchases', [PurchasesController::class,'store']);
Route::post('/konsers/{konser}/orders', [KonserOrderController::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
