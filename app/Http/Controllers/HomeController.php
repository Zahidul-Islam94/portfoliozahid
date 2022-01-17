<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function manageHome(){
        $homes = Home::all(); 
        return response()->json(["homes"=>$homes]);
    }
    function createHome(Request $request){
       $home = Home::create([
            "title"             => $request->title,
            "subtitle"          => $request->subtitle,
            "image"             => $request->image,
        ]);
        return response()->json(["success"=>(bool)$home,'home'=>$home]);
    }
   /*  function updateHome(){
        return "Update Home";
    }
    function deleteHome(){
        return "delete Home";
    } */
}
