<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resume;
use Carbon\Carbon;

class ResumeController extends Controller{ 
    
    //index page
    public function index(){ 
        $theData = Resume::get();
        return view('dashboard.resume.resume', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->cirtificate_img->extension();
        $req->cirtificate_img->move(public_path('img/resume/'), $img);
        $uplaod_url = 'img/resume/'.$img; 
         
        Resume::insert([
            'cirtificate_img'  => $uplaod_url, 
            'heading'       => $req->heading,
            'company'       => $req->company,
            'from'          => $req->from,
            'to'            => $req->to,
            'desciption'    => $req->desciption,
            'forthis'       => $req->forthis,
            'status'        => 0,
            'created_at'    => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Resume::where('id',$id)->first(); 
        if ($gimg->cirtificate_img) {
            unlink($gimg->cirtificate_img);
        }
        Resume::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Resume::where('id', $id)->first();
        return view('dashboard.resume.resume-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->cirtificate_img->extension();
        $req->cirtificate_img->move(public_path('img/resume/'), $imgname); 
        $uplaod_url = 'img/resume/'.$imgname;

        $dtbs       = Resume::where('id', $req->id)->first();
        if ($dtbs->cirtificate_img) {
            unlink($dtbs->cirtificate_img);
        }

        Resume::where('id', $req->id)->update([ 
            'cirtificate_img'  => $uplaod_url, 
            'heading'       => $req->heading,
            'company'       => $req->company,
            'from'          => $req->from,
            'to'            => $req->to,
            'desciption'    => $req->desciption,
            'forthis'       => $req->forthis, 
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Resume::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Resume::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
