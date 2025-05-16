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
Route::resource('car_photo',CarPhotoController::class)->middleware('jwt.auth');