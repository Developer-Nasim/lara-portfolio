<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\experincesInfo;
use Carbon\Carbon;

class ExperincesInfoController extends Controller
{
     
    //index page
    public function index(){ 
        $theData = experincesInfo::get();
        return view('dashboard.experinces.experinces', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->counter_icon->extension();
        $req->counter_icon->move(public_path('img/experinces/'), $img);
        $uplaod_url = 'img/experinces/'.$img; 

        experincesInfo::insert([
            'counter_icon'        => $uplaod_url, 
            'counter_number'      => $req->counter_number,
            'counter_contents'    => $req->counter_contents,
            'status'              => 0,
            'created_at'          => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = experincesInfo::where('id',$id)->first(); 
        if ($gimg->counter_icon) {
            unlink($gimg->counter_icon);
        }
        experincesInfo::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = experincesInfo::where('id', $id)->first();
        return view('dashboard.experinces.experinces-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->counter_icon->extension();
        $req->counter_icon->move(public_path('img/experinces/'), $imgname); 
        $uplaod_url = 'img/experinces/'.$imgname;

        $dtbs       = experincesInfo::where('id', $req->id)->first();
        if ($dtbs->counter_icon) {
            unlink($dtbs->counter_icon);
        }

        experincesInfo::where('id', $req->id)->update([ 
            'counter_icon'        => $uplaod_url, 
            'counter_number'      => $req->counter_number,
            'counter_contents'    => $req->counter_contents,
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = experincesInfo::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        experincesInfo::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
