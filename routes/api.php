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

Route::resource('posts',PostController::class)->middleware('jwt.auth');
Route::resource('cities',CityController::class)->middleware('jwt.auth');
Route::resource('cars',CarController::class)->middleware('jwt.auth');

// Car Photo

// Route::resource('car_photo',CarPhotoController::class)->middleware('jwt.auth');
Route::post('/car_photo', [CarPhotoController::class, 'store'])->middleware('jwt.auth');
Route::get('/car_photo', [CarPhotoController::class, 'index'])->middleware('jwt.auth');
Route::get('/car_photo/{id}', [CarPhotoController::class, 'show'])->middleware('jwt.auth');
Route::patch('/car_photo/{id}', [CarPhotoController::class, 'update'])->middleware('jwt.auth');
Route::delete('/car_photo/{id}', [CarPhotoController::class, 'destroy'])->middleware('jwt.auth');
