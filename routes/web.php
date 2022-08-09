<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/register')->group(function () {
    Route::get("/", [UserController::class, 'create'])->middleware('guest');
    Route::post("/", [UserController::class, 'store']);
});
Route::prefix('/login')->group(function () {
    Route::get("/", [UserController::class, 'login'])->name('login')->middleware('guest');
    Route::post("/", [UserController::class, 'authenticate']);
});
Route::get("/logout", [UserController::class, 'logout']);

Route::prefix('/games')->group(function () {
    Route::get('/{game}', [HomeController::class, 'show']);
});
