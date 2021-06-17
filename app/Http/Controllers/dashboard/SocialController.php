<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;
use Carbon\Carbon;

class SocialController extends Controller
{

    //index page
    public function index(){ 
        $theData = Social::get();
        return view('dashboard.social.social', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 
 
        Social::insert([
            'icon'      => $req->socialIcon, 
            'link'      => $req->socialLink, 
            'status'    => 0,
            'created_at'  => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){ 
        Social::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Social::where('id', $id)->first();
        return view('dashboard.social.social-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){
        	
        Social::where('id', $req->id)->update([ 
            'icon'      => $req->socialIcon, 
            'link'      => $req->socialLink, 
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Social::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Social::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }


}
