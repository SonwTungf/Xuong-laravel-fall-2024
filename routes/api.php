<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('regiser', [AuthController::class, 'regiser']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')
    ->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        Route::post('logout', [AuthController::class, 'logout']);
    });


route::apiResource('customers', CustomerController::class);



Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/projects/{id}/tasks', [TaskController::class, 'index']);
Route::post('/projects/{id}/tasks', [TaskController::class, 'store']);
Route::get('/projects/{id}/tasks/{taskId}', [TaskController::class, 'show']);
Route::put('/projects/{id}/tasks/{taskId}', [TaskController::class, 'update']);
Route::delete('/projects/{id}/tasks/{taskId}', [TaskController::class, 'destroy']);
