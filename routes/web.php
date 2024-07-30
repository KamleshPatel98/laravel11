<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    //return view('welcome');
    return Hash::make(12345678);
});


Route::get('captcha-form',[CaptchaController::class,'captcha_form'])->name('captcha_form');
Route::get('get-captcha',[CaptchaController::class,'get_captcha'])->name('get_captcha');
Route::post('captcha',[CaptchaController::class,'captcha'])->name('captcha');