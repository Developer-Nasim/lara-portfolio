<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Carbon\Carbon; 
class BlogController extends Controller
{ 
    
    //index page
    public function index(){ 
        $theData = Blog::get();
        return view('dashboard.blog.blog', compact('theData'));
    }

    // Insert
    public function insert(Request $req){  

        $img = hexdec(uniqid()).'.'.$req->blog_img->extension();
        $req->blog_img->move(public_path('img/blog/'), $img);
        $uplaod_url = 'img/blog/'.$img;  
        Blog::insert([
            'blog_image'    => $uplaod_url, 
            'blog_heading'  => $req->heading,
            'blog_slug'     => $req->slug,
            'blog_contents' => $req->blog_contents,
            'blog_writter'  => $req->heading,
            'status'        => 0,
            'created_at'    => Carbon::now(), 
        ]);
        		
        return back();
    } 
 
    // delete
    public function delete($id){
        $gimg = Blog::where('id',$id)->first(); 
        if ($gimg->blog_image) {
            unlink($gimg->blog_image);
        }
        Blog::find($id)->delete();
        return back();
    }

    // update IndexPage
    public function updateIndex($id){
        $thisPage = Blog::where('id', $id)->first();
        return view('dashboard.blog.blog-update', compact('thisPage','id'));
    }

    // Update 
    public function updateing(Request $req){

        $imgname    = hexdec(uniqid()).'.'.$req->blog_img->extension();
        $req->blog_img->move(public_path('img/blog/'), $imgname); 
        $uplaod_url = 'img/blog/'.$imgname;

        $dtbs       = Blog::where('id', $req->id)->first();
        if ($dtbs->blog_image) {
            unlink($dtbs->blog_image);
        }

        Blog::where('id', $req->id)->update([ 
            'blog_image'    => $uplaod_url, 
            'blog_heading'  => $req->heading,
            'blog_slug'     => $req->slug,
            'blog_contents' => $req->blog_contents,
        ]);

        return back(); 

    }

    // Status
    public function status($id){
        $keepSt = 0;
        $db = Blog::where('id', $id)->first();
        if ($db->status == 0) {
            $keepSt = 1;
        }else{
            $keepSt = 0;
        }
        Blog::where('id', $id)->update([
            'status'    => $keepSt
        ]);

        return back();
    }


}
