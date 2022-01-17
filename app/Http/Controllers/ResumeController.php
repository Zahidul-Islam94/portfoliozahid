<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function manageResume(){
        $resumes = Resume::all(); 
        return response()->json(["resumes"=>$resumes]);
    }
    function createResume(Request $request){
       $resume = Resume::create([
            "title"            => $request->title,
            "summary"          => $request->summary,
            
        ]);
        return response()->json(["success"=>(bool)$resume,'resume'=>$resume]);
    }
}
