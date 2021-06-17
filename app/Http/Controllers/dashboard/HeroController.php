<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hero;
use Carbon\Carbon;

class HeroController extends Controller
{
    //index page
    public function index(){ 
        $theData = Hero::get();
        return view('dashboard.hero.hero', compact('theData'));
    }

    // Hero Content Insert
    public function heroContentInsert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->heroImg->extension();
        $req->heroImg->move(public_path('img/hero/'), $img);
        
        $uplaod_url = 'img/hero/'.$img;

        Hero::insert([
            'title'         => $req->heading,
            'subtitle'      => $req->subheading,
            'link'          => $req->link,
            'animated_text' => $req->animText,
            'image'         => $uplaod_url,
            'status'        => 0,
            'created_at'    => Carbon::now(), 
        ]);

        return back();
    } 

 
    // delete
    public function delete($id){
        $gimg = Hero::where('id',$id)->first(); 
        if ($gimg->image) {
            unlink($gimg->image);
        }
        Hero::find($id)->delete();
        return back();
    }


    // update Index Page
    public function updateIndex($id){
        $thisPage = Hero::where('id', $id)->first();
        return view('dashboard.hero.hero-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->heroImg->extension();
        $req->heroImg->move(public_path('img/hero/'), $imgname); 
        $uplaod_url = 'img/hero/'.$imgname;

        $dtbs       = Hero::where('id', $req->id)->first();
        if ($dtbs->heroImg) {
            unlink($dtbs->heroImg);
        }

        Hero::where('id', $req->id)->update([
            'title'         => $req->heading,
            'subtitle'      => $req->subheading,
            'link'          => $req->link,
            'animated_text' => $req->animText,
            'image'         => $uplaod_url,
            'status'        => 0, 
        ]); 
 
        return back();


    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Hero::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Hero::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }






}
