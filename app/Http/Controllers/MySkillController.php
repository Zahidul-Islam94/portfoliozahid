<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\MySkill;
use Illuminate\Http\Request;

class MySkillController extends Controller
{
    function skillCreate(){
        $skill=MySkill::create([
                'language'      => 'css',
                'percentage'    => '75'
        ]);
        return $skill;
        /* if($skill){
            return "Data insert successful!";
        }
        else{
            return "Failed to insert data";
        } */
    }
    function skillManage(){
        $skills = MySkill::get();
        return view('skills',['skills'=>$skills]);
    }
    function skillUpdate(){
        $result = MySkill::find(6)->update([
            'percentage'    => '95'
        ]);
        if($result){
            return "Data update successful!";
        }
        else{
            return "Failed to update data";
        }
    }
    function skillDelete(){
        $result = MySkill::where('id',2)->delete();
        if($result){
            return "Data deleted successful!";
        }
        else{
            return "Failed to delete data";
        }
    }
    function agentSelect(){
        $agents = MySkill::where('id',8)->first();
        return $agents;
    }
}
// Retrieving data
// =====================
// get()
// where(condition)->get()
// where(condition)->first()
// where(condition)->vlue('column_name)
// pluck(column_name)
// find() == where(condition)->first()

// Aggregate function
// =====================
// max()
// min()
// avg()
// count()

// Delete data
// =====================
// where(condition)->delete();

// Update data
// =====================
// where(condition)->update(
    // [
        // 'colmn_name' => 'value'
    // ]
// );

// create([
    // 'colmn_name1'      => 'value1',
    // 'colmn_name2'    => 'value2'
// ]);