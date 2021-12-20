<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    function loopLearn(){
        $countries = ['Bangladesh','India','America','Australia'];
        $status=true;
        return view('loopView',['countries'=>$countries,'status'=>$status]);
    }
}
