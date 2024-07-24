<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function captchaForm(){
        return view('captcha_form');
    }

    public function captcha(Request $request){
        return $request;
    }

    public function get_captcha(Request $request){
        return response()->json(['captcha'=>captcha_img()]);
    }
}

