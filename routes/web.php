<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('captcha-form',['CaptchaController@captcha-form'])->name('captcha-form');
Route::get('get-captcha',['CaptchaController@get-captcha'])->name('get-captcha');
Route::post('captcha',['CaptchaController@captcha'])->name('captcha');