<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    function home(){
        return view("home");
    }
    function skills(){
        return view("skills");
    }
    function my_team(){
        return view("my_team");
    }
    function what_we_do(){
        return view("what_we_do");
    }
    function portfolio(){
        return view("portfolio");
    }
    function testimonial(){
        return view("testimonial");
    }
}
