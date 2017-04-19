<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signal;

class Api extends Controller
{
    function index(){
        $test = Signal::where("name","emre")->get();
        return $test;

    }
}
