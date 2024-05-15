<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;

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

// Route::post('/register', RegisterController::class)->name('register');
Route::post('/register1', RegisterController::class)->name('register1');

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

Route::group(
    ['prefix' => 'users', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [UserController::class, 'index']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/{user}', [UserController::class, 'show']);
        Route::put('/{user}', [UserController::class, 'update']);
        Route::delete('/{user}', [UserController::class, 'destroy']);
    }
);

Route::group(
    ['prefix' => 'barang', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [BarangController::class, 'index']);
        Route::post('/', [BarangController::class, 'store']);
        Route::get('/{barang}', [BarangController::class, 'show']);
        Route::put('/{barang}', [BarangController::class, 'update']);
        Route::delete('/{barang}', [BarangController::class, 'destroy']);
    }
);

Route::group(
    ['prefix' => 'kategori', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [KategoriController::class, 'index']);
        Route::post('/', [KategoriController::class, 'store']);
        Route::get('/{kategori}', [KategoriController::class, 'show']);
        Route::put('/{kategori}', [KategoriController::class, 'update']);
        Route::delete('/{kategori}', [KategoriController::class, 'destroy']);
    }
);
