<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        $a=5;
        $b=10;
        $c=$a+$b;
        return view('welcome',compact('c'));
    }
}
