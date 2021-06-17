<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aboutme;
use Carbon\Carbon;

class AboutController extends Controller
{   
    
    
    //index page
    public function index(){ 
        $theData = Aboutme::get();
        return view('dashboard.about.about', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->aboutImg->extension();
        $req->aboutImg->move(public_path('img/about/'), $img);
        $uplaod_url = 'img/about/'.$img; 

        Aboutme::insert([
            'about_image'       => $uplaod_url, 
            'about_description' => $req->aboutText,
            'status'        => 0,
            'created_at'    => Carbon::now(), 
        ]);

        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Aboutme::where('id',$id)->first(); 
        if ($gimg->about_image) {
            unlink($gimg->about_image);
        }
        Aboutme::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Aboutme::where('id', $id)->first();
        return view('dashboard.about.about-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->aboutImg->extension();
        $req->aboutImg->move(public_path('img/about/'), $imgname); 
        $uplaod_url = 'img/about/'.$imgname;

        $dtbs       = Aboutme::where('id', $req->id)->first();
        if ($dtbs->about_image) {
            unlink($dtbs->about_image);
        }

        Aboutme::where('id', $req->id)->update([
            'about_image'       => $uplaod_url, 
            'about_description' => $req->aboutText,
            'status'        => 0, 
        ]); 
 
        return back();


    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Aboutme::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Aboutme::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }



}
