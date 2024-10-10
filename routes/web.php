<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('client.index');
});

Route::get('post-details', function () {

    return view('client.post-details');
});


Route::resource('customers', CustomerController::class)->middleware('auth');

Auth::routes();


Route::delete('customers/{customers}/forceDestroy', [CustomerController::class, 'forceDestroy'])
    ->name('customers.forceDestroy');

Route::get('session', function () {
    // session()->put('orders.101', [
    //     'name' => 'sp1',
    //     'price' => 2222
    // ]);

    session()->flash('choi ke', 'okee choi luon');

    session('choi ke');
    return session()->all();
});


//BUOI 5 BAI 1

Route::get('/transaction/start', [TransactionController::class, 'startTransaction'])->name('transaction.start');
Route::post('/transaction/process', [TransactionController::class, 'processTransaction'])->name('transaction.process');
Route::post('/transaction/complete', [TransactionController::class, 'completeTransaction'])->name('transaction.complete');
Route::post('/transaction/cancel', [TransactionController::class, 'cancelTransaction'])->name('transaction.cancel');
Route::get('/transaction/resume', [TransactionController::class, 'resumeTransaction'])->name('transaction.resume');


// BUOI 5 BAI 2

Route::apiResource('projects', ProjectController::class);
Route::apiResource('projects.tasks', TaskController::class);
