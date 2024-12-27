<?php

namespace App\Http\Controllers;
use \NumberFormatter;

use Illuminate\Http\Request;

class SpellNumberController extends Controller
{
    public function index($number){
        $inWords = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
        echo $inWords->format($number);
    }

    public function index1(){
        $this->index(1234);
        $this->index(1234);
        $this->index(1234);
    }
}
