<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarPhotoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);
});

Route::post('/posts', [PostController::class, 'store'])->middleware('jwt.auth');
Route::get('/posts', [PostController::class, 'index'])->middleware('jwt.auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->middleware('jwt.auth');
Route::patch('/posts/{post}', [PostController::class, 'update'])->middleware('jwt.auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('jwt.auth');

Route::post('/city', [CityController::class, 'store'])->middleware('jwt.auth');
Route::get('/city', [CityController::class, 'index'])->middleware('jwt.auth');
Route::get('/city/{city}', [CityController::class, 'show'])->middleware('jwt.auth');
Route::patch('/city/{city}', [CityController::class, 'update'])->middleware('jwt.auth');
Route::delete('/city/{city}', [CityController::class, 'destroy'])->middleware('jwt.auth');

Route::post('/cars', [CarController::class, 'store'])->middleware('jwt.auth');
Route::get('/cars', [CarController::class, 'index'])->middleware('jwt.auth');
Route::get('/cars/{car}', [CarController::class, 'show'])->middleware('jwt.auth');
Route::patch('/cars/{car}', [CarController::class, 'update'])->middleware('jwt.auth');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->middleware('jwt.auth');

Route::post('/car_photo', [CarPhotoController::class, 'store'])->middleware('jwt.auth');
Route::get('/car_photo', [CarPhotoController::class, 'index'])->middleware('jwt.auth');
Route::get('/car_photo/{photo}', [CarPhotoController::class, 'show'])->middleware('jwt.auth');
Route::patch('/car_photo/{photo}', [CarPhotoController::class, 'update'])->middleware('jwt.auth');
Route::delete('/car_photo/{photo}', [CarPhotoController::class, 'destroy'])->middleware('jwt.auth');