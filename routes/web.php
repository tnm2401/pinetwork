<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name("index");
Route::get('/ajax-operations', [\App\Http\Controllers\MainController::class, 'load_operations'])->name("load-operation");
Route::get('/ajax-transactions', [\App\Http\Controllers\MainController::class, 'load_transactions'])->name("load-transaction");
Route::get('/ajax-blocks', [\App\Http\Controllers\MainController::class, 'load_blocks'])->name("load-block");


Route::get('/payments', [\App\Http\Controllers\MainController::class, 'get_payment'])->name("get_payment");
Route::get('/load-payment', [\App\Http\Controllers\MainController::class, 'update_payment'])->name("load_payment");
Route::post('/payment', [\App\Http\Controllers\MainController::class, 'get_payment'])->name("post_payment");

Route::get('/transactions', [\App\Http\Controllers\MainController::class, 'get_transactions'])->name("get_transactions");
Route::get('/load-transactions', [\App\Http\Controllers\MainController::class, 'update_transactions'])->name("load_transactions");
Route::post('/transactions', [\App\Http\Controllers\MainController::class, 'get_transactions'])->name("post_transactions");

Route::get('/blocks', [\App\Http\Controllers\MainController::class, 'get_blocks'])->name("get_blocks");
Route::get('/load-blocks', [\App\Http\Controllers\MainController::class, 'update_blocks'])->name("load_blocks");
Route::post('/blocks', [\App\Http\Controllers\MainController::class, 'get_blocks'])->name("post_blocks");

///get detail info account , block, hash
Route::get('/hash/{value}', [\App\Http\Controllers\MainController::class, 'hash_detail'])->name("hash_detail");
