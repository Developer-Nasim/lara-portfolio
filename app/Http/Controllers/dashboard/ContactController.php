<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    
    //index page
    public function index(){ 
        $theData = Contact::get();
        return view('dashboard.contact.contact', compact('theData'));
    }

    // Insert
    public function insert(Request $req){ 
         
        Contact::insert([
            'name'       => $req->name, 
            'email'      => $req->email,
            'number'     => $req->phone,
            'message'    => $req->message,
            'status'     => 0,
            'created_at' => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){ 
        Contact::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Contact::where('id', $id)->first();
        return view('dashboard.services.services-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){
 
        Contact::where('id', $req->id)->update([ 
            'name'       => $req->name, 
            'email'      => $req->email,
            'number'     => $req->phone,
            'message'    => $req->message,
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Contact::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Contact::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }

}
