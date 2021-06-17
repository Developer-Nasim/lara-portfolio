<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SectionTitle;
use Carbon\Carbon;

class SectionTitlesController extends Controller
{
    
    //index page
    public function index(){ 
        $theData = SectionTitle::get();
        return view('dashboard.section_title.section_title', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 
        		
        SectionTitle::insert([
            'subheading'   => $req->subtitle, 
            'heading'      => $req->title, 
            'thisection'   => $req->whichSection, 
            'status'       => 0,
            'created_at'   => Carbon::now(), 
        ]);
        
        return back();
    } 
 
    // delete
    public function delete($id){ 
        SectionTitle::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = SectionTitle::where('id', $id)->first();
        return view('dashboard.section_title.section_title-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){
        	
        SectionTitle::where('id', $req->id)->update([ 
            'subheading'   => $req->subtitle, 
            'heading'      => $req->title, 
            'thisection'   => $req->whichSection, 
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = SectionTitle::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        SectionTitle::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
