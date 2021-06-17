<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
use Carbon\Carbon;

class FooterController extends Controller
{
    
    //index page
    public function index(){ 
        $theData = Footer::get();
        return view('dashboard.footer.footer', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 
        	
        Footer::insert([
            'footer_wrp'        => $req->footerContent, 
            'footer_copyright'  => $req->CopyrightText, 
            'status'            => 0,
            'created_at'        => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){ 
        Footer::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Footer::where('id', $id)->first();
        return view('dashboard.footer.footer-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){
        	
        Footer::where('id', $req->id)->update([ 
            'footer_wrp'        => $req->footerContent, 
            'footer_copyright'  => $req->CopyrightText, 
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Footer::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Footer::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }


}
