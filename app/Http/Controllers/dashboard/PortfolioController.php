<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioMenu;
use Carbon\Carbon;

class PortfolioController extends Controller
{ 
    
    //index page
    public function index(){ 
        $theData = Portfolio::get();
        $theMenuData = PortfolioMenu::get();
        return view('dashboard.portfolio.portfolio', compact('theData','theMenuData'));
    }

    // Insert
    public function insert(Request $req){ 

        $img = hexdec(uniqid()).'.'.$req->image->extension();
        $req->image->move(public_path('img/portfolio/'), $img);
        $uplaod_url = 'img/portfolio/'.$img; 

        Portfolio::insert([
            'subtitle'  => $req->subtitle, 
            'heading'   => $req->heading,
            'image'     => $uplaod_url,
            'link'      => $req->link,
            'forthis'   => $req->forthis,
            'status'    => 0,
            'created_at'  => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Portfolio::where('id',$id)->first(); 
        if ($gimg->image) {
            unlink($gimg->image);
        }
        Portfolio::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Portfolio::where('id', $id)->first();
        return view('dashboard.portfolio.portfolio-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->image->extension();
        $req->image->move(public_path('img/portfolio/'), $imgname); 
        $uplaod_url = 'img/portfolio/'.$imgname;

        $dtbs       = Portfolio::where('id', $req->id)->first();
        if ($dtbs->image) {
            unlink($dtbs->image);
        }

        Portfolio::where('id', $req->id)->update([ 
            'subtitle'  => $req->subtitle, 
            'heading'   => $req->heading,
            'image'     => $uplaod_url,
            'link'      => $req->link,
            'forthis'   => $req->forthis,
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Portfolio::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Portfolio::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }
    









    //index page
    public function indexCt(){ 
        $theMenuData = PortfolioMenu::get();
        return view('dashboard.portfolio.portfolio', compact('theMenuData'));
    }
     
    // Insert
    public function insertCt(Request $req){ 
 
        PortfolioMenu::insert([
            'name'        => $req->cateName, 
            'filter_name' => $req->slug, 
            'status'      => 0,
            'created_at'  => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function deleteCt($id){ 
        PortfolioMenu::find($id)->delete();
        return back();
    } 

    // Status
    public function statusCt($id){
        $keepSt = 0;
        $db = PortfolioMenu::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        PortfolioMenu::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }
}
