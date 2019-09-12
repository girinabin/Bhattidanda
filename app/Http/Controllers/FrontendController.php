<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Service;
use App\Package;
use App\Review;
use App\Contact;
use App\Album;
use App\Image;
use App\Carousel;
use App\Introduction;


class FrontendController extends Controller
{
    public function home(){
        $homes = Carousel::where('active','1')->get();
        $hom = Carousel::where('active','1')->first();

        $albums = Album::where('active','1')->orderBy('id','desc')->get()->take(4);
        $intro = Introduction::first();
        $seo = DB::table('seos')->where('page','home')->first();

    	return view('frontend.home.home',compact('homes','albums','intro','hom','seo'));
    }

    public function knowabout(){
        $seo = DB::table('seos')->where('page','about')->first();
        $about= DB::table('knowabouts')->get()->first();
    	return view('frontend.about.know-about-phool-maya',compact('about','seo'));
    }
    public function booking($slug){
        $seo = DB::table('seos')->where('page','booking')->first();


        $packages = Package::where('slug',$slug)->get()->first();

    	return view('frontend.booking.booking',compact('packages','seo'));
    	
    }
    public function contact(){
        $seo = DB::table('seos')->where('page','contact')->first();

        
    	return view('frontend.contact.contact',compact('seo'));
    	
    }
    public function gallery(){
        $albums = Album::where('active','1')->orderBy('id','desc')->get();
        $seo = DB::table('seos')->where('page','gallery')->first();


    	return view('frontend.gallery.gallery',compact('albums','seo'));
    	
    }
    public function room(){
    	return view('frontend.room.room');
    	
    }
    public function package(){
        $packages = Package::where('active','1')->orderBy('id','desc')->get();
        $seo = DB::table('seos')->where('page','package')->first();

    	return view('frontend.package.package',compact('packages','seo'));
    	
    }
    public function ourservice(){
        $services = Service::where('active','1')->orderBy('id','desc')->get();
        $seo = DB::table('seos')->where('page','service')->first();

        return view('frontend.service.ourservice',compact('services','seo'));
        
    }
    public function album1($id){
        $images = Image::where('album_id',$id)->where('active','1')->orderBy('id','desc')->get();
        $s= Album::all();
        return view('frontend.gallery.album1',compact('images','s'));
        
    }
    
     public function whyus(){
        return view('frontend.whyus.whyus');
        
    }
    public function guestreviews(){
        $seo = DB::table('seos')->where('page','review')->first();

        $reviews = Review::where('active','1')->orderBy('id','desc')->get();
        return view('frontend.guestreviews.guestreviews',compact('reviews','seo'));
        
    }

}

