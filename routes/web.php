<?php

use App\Http\Controllers\CustomerController;
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



Route::delete('customers/{customers}/forceDestroy', [CustomerController::class, 'forceDestroy'])
    ->name('customers.forceDestroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
