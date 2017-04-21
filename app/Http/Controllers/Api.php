<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signal;

class Api extends Controller
{
    function index(){
        return Signal::all();

    }

    function add($rss,$name,$frequency,$date=null,$type=0){
        date_default_timezone_set ("Europe/Istanbul");
        if($date == null || !preg_match("^(\d{4})-(\d{2})-(\d{2})(?:\s+(\d{2}):(\d{2}):(\d{2}))?$",$date))
            $date = date("Y-m-d H:i:s");

        $frequency = (int)$frequency;

        $signal = new Signal();
        $signal->rss = $rss;
        $signal->name = $name;
        $signal->frequency = $frequency;
        $signal->date = $date;
        $signal->type = $type;
        $signal->save();

        if($signal->id){
            return 1;
        }else return 0;

    }
}
