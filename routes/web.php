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
Route::get('/transaction/{id}', [ViewController::class, 'detailTransaction']);
Route::get('/transaction/update/{id}', [ViewController::class, 'updateTransaction']);

Route::prefix('/api')->group(function(){
    Route::get('/transaction', [TransactionController::class, 'allTransaction']);
    Route::post('/transaction', [TransactionController::class, 'createTransaction']);
    Route::put('/transaction', [TransactionController::class, 'updateTransaction']);
    Route::delete('/transaction', [TransactionController::class, 'deleteTransaction']);

    Route::get('/diantar/{id}', [TransactionController::class, 'diantarTransaction']);
    Route::get('/dibayar/{id}', [TransactionController::class, 'dibayarTransaction']);
});
