<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Header;
use Image;
use Carbon\Carbon;
class HeaderController extends Controller
{
    //index page
    public function index(){
        $theData = Header::latest()->get(); 
        return view('dashboard.headers.header',compact('theData'));
    }

    // Logo Upload
    public function LogoUpload(Request $request){ 
 
   
        $imageName = time().'.'.$request->logofile->extension();   
        $request->logofile->move(public_path('frontend/img/logo'), $imageName);
        
        Header::insert([
            'logo'  => $imageName,
            'status'=> 0,
            'created_at'=> Carbon::now(),
        ]);
   
        return back()
        ->with('success','File has been uploaded.')
        ->with('file', $imageName);
    }

 
    // Logo-delete
    public function deleteLogo($id){
        $gimg = Header::where('id',$id)->first(); 
        if ($gimg->logo) {
            unlink('frontend/img/logo/'.$gimg->logo);
        }
        Header::find($id)->delete();
        return back();
    }


    // update Logo Index Page
    public function updateLogo($id){
        $thisPage = Header::where('id', $id)->first();
        return view('dashboard.headers.header-logoUpload', compact('thisPage','id'));
    }

    // Update logo 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->logofiles->extension();
        $req->logofiles->move(public_path('frontend/img/logo'), $imgname);


        $dtbs       = Header::where('id', $req->number)->first();
        if ($dtbs->logo) {
            unlink('frontend/img/logo/'.$dtbs->logo);
        }

        Header::where('id', $req->number)->update([
            'logo'      => $imgname, 
            'updated_at'=> Carbon::now(),
        ]);

        $theData = Header::latest()->get(); 
        return view('dashboard.headers.header',compact('theData'));


    }

    // Status
    public function statusLogo($id){
        $keepSt = 0;
        $db = Header::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Header::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        $theData = Header::latest()->get(); 
        return view('dashboard.headers.header',compact('theData'));
    }














} 