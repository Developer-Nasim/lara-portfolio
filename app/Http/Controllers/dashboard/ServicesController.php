<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;
use Carbon\Carbon;

class ServicesController extends Controller
{

    //index page
    public function index(){ 
        $theData = Services::get();
        return view('dashboard.services.services', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->services_icon->extension();
        $req->services_icon->move(public_path('img/services/'), $img);
        $uplaod_url = 'img/services/'.$img; 

        Services::insert([
            'services_icon'         => $uplaod_url, 
            'services_heading'      => $req->services_heading,
            'services_contents'     => $req->services_contents,
            'status'                => 0,
            'created_at'            => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Services::where('id',$id)->first(); 
        if ($gimg->services_icon) {
            unlink($gimg->services_icon);
        }
        Services::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Services::where('id', $id)->first();
        return view('dashboard.services.services-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->services_icon->extension();
        $req->services_icon->move(public_path('img/services/'), $imgname); 
        $uplaod_url = 'img/services/'.$imgname;

        $dtbs       = Services::where('id', $req->id)->first();
        if ($dtbs->services_icon) {
            unlink($dtbs->services_icon);
        }

        Services::where('id', $req->id)->update([ 
            'services_icon'         => $uplaod_url, 
            'services_heading'      => $req->services_heading,
            'services_contents'     => $req->services_contents,  
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Services::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Services::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }


}
