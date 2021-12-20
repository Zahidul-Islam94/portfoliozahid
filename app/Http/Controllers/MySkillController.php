<?php

namespace App\Http\Controllers;

use App\Models\MySkill;
use Illuminate\Http\Request;

class MySkillController extends Controller
{
    function skillCreate(){
        $skill=MySkill::create([
            'language'      => 'angular',
            'percentage'    => '75'
        ]);
        if($skill){
            return "Data insert successful!";
        }
        else{
            return "Failed to insert data";
        }
    }
    function skillManage(){
        $skills = MySkill::get();
        return view('skills',['skills'=>$skills]);
    }
}
