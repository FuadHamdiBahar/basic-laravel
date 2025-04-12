<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'index']);
Route::get('/pos', [ViewController::class, 'posIndex'])->name('pos');
Route::get('/transaction', [ViewController::class, 'listTransaction'])->name('listTransaction');

Route::post('/transaction', [TransactionController::class, 'createTransaction']);
