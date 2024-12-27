<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\SpellNumberController;

Route::get('/', function () {
    //return view('welcome');
    return Hash::make(12345678);
});


//Google recaptcha v2
Route::get('captcha-form',[CaptchaController::class,'captcha_form'])->name('captcha_form');
Route::get('get-captcha',[CaptchaController::class,'get_captcha'])->name('get_captcha');
Route::post('captcha',[CaptchaController::class,'captcha'])->name('captcha');

//SpellNumber (number to word)
Route::get('spell-number',[SpellNumberController::class,'index1']);