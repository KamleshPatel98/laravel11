<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function captcha_form(){
        return view('captcha_form');
    }

    public function captcha(Request $request){
        $request->validate([
            'name'=>'string|max:70',
            'captcha'=>'required|captcha',
        ]);
        return $request;
    }

    public function get_captcha(Request $request){
        return response()->json(['captcha'=>captcha_img('math')]);
    }
}

