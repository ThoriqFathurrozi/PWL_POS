<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/levels', [App\Http\Controllers\Api\LevelController::class, 'index'])->name('level');
Route::post('/levels', [App\Http\Controllers\Api\LevelController::class, 'store']);
Route::get('/levels/{level}', [App\Http\Controllers\Api\LevelController::class, 'show']);
Route::put('/levels/{level}', [App\Http\Controllers\Api\LevelController::class, 'update']);
Route::delete('/levels/{level}', [App\Http\Controllers\Api\LevelController::class, 'destroy']);
