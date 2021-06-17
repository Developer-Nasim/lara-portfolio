<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Carbon\Carbon;

class TestimonailController extends Controller
{
    
    //index page
    public function index(){ 
        $theData = Testimonial::get();
        return view('dashboard.testimonial.testimonial', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 
         
        $img = hexdec(uniqid()).'.'.$req->client_img->extension();
        $req->client_img->move(public_path('img/testimonial/'), $img);
        $uplaod_url = 'img/testimonial/'.$img; 
         
        Testimonial::insert([
            'client_img'        => $uplaod_url, 
            'client_name'       => $req->client_name,
            'client_proffesion' => $req->client_proffesion,
            'client_feedback'   => $req->client_feedback,
            'status'            => 0,
            'created_at'        => Carbon::now(),
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Testimonial::where('id',$id)->first(); 
        if ($gimg->client_img) {
            unlink($gimg->client_img);
        }
        Testimonial::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Testimonial::where('id', $id)->first();
        return view('dashboard.testimonial.testimonial-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->client_img->extension();
        $req->client_img->move(public_path('img/testimonial/'), $imgname); 
        $uplaod_url = 'img/testimonial/'.$imgname;

        $dtbs       = Testimonial::where('id', $req->id)->first();
        if ($dtbs->client_img) {
            unlink($dtbs->client_img);
        }

        Testimonial::where('id', $req->id)->update([ 
            'client_img'        => $uplaod_url, 
            'client_name'       => $req->client_name,
            'client_proffesion' => $req->client_proffesion,
            'client_feedback'   => $req->client_feedback,
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Testimonial::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Testimonial::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
