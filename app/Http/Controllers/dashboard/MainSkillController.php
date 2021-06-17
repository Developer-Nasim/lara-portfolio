<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MainSkill;
use Carbon\Carbon;

class MainSkillController extends Controller
{ 
    
    //index page
    public function index(){ 
        $theData = MainSkill::get();
        return view('dashboard.skills.main_skills', compact('theData'));
    }

    // Insert
    public function insert(Request $req){  
        MainSkill::insert([
            'skill_name' => $req->skillName,
            'skill_rate' => $req->skillRates,
            'status'            => 0,
            'created_at'        => Carbon::now(),
        ]); 
        return back();
    } 
 
    // delete
    public function delete($id){ 
        MainSkill::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = MainSkill::where('id', $id)->first();
        return view('dashboard.skills.main_skills-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){
 
        MainSkill::where('id', $req->id)->update([
            'skill_name' => $req->skillName,
            'skill_rate' => $req->skillRates,
        ]); 
  
        return back(); 
    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = MainSkill::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        MainSkill::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
