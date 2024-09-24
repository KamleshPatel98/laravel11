<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\FetchController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::group(['prefix' => 'auth'], function ($router) {
// Route::group( function ($router) {
    Route::post('register', [AuthController::class,'register']);
    Route::get('login', [AuthController::class,'get_login'])->name('login');
    Route::post('login', [AuthController::class,'login']);
// });

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);
});

Route::get('test',[FetchController::class,'test']);