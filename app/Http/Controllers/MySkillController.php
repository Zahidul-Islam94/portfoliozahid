<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\MySkill;
use Illuminate\Http\Request;

class MySkillController extends Controller
{
    function skillCreate(Request $request){
        $skill=MySkill::create([
                'language'      => $request->language,
                'percentage'    => $request->percentage
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
        // return response()->json(['skills'=>$skills]);
        return view('manage-skill',['skills'=>$skills]);
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
    function skillDelete(Request $request){
        $result = MySkill::where('id',$request->id)->delete();
        return response()->json(['success'=>(bool)$result]);
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