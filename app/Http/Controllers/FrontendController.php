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
    	return view('frontend.home.home',compact('homes','albums','intro','hom'));
    }

    public function knowabout(){
        $about= DB::table('knowabouts')->get()->first();
    	return view('frontend.about.know-about-phool-maya',compact('about'));
    }
    public function booking($slug){
        $packages = Package::where('slug',$slug)->get()->first();

    	return view('frontend.booking.booking',compact('packages'));
    	
    }
    public function contact(){
        
    	return view('frontend.contact.contact');
    	
    }
    public function gallery(){
        $albums = Album::where('active','1')->orderBy('id','desc')->get();

    	return view('frontend.gallery.gallery',compact('albums'));
    	
    }
    public function room(){
    	return view('frontend.room.room');
    	
    }
    public function package(){
        $packages = Package::where('active','1')->orderBy('id','desc')->get();
    	return view('frontend.package.package',compact('packages'));
    	
    }
    public function ourservice(){
        $services = Service::where('active','1')->orderBy('id','desc')->get();
        return view('frontend.service.ourservice',compact('services'));
        
    }
    public function album1($id){
        $images = Image::where('album_id',$id)->where('active','1')->orderBy('id','desc')->get();
        return view('frontend.gallery.album1',compact('images'));
        
    }
    
     public function whyus(){
        return view('frontend.whyus.whyus');
        
    }
    public function guestreviews(){
        $reviews = Review::where('active','1')->orderBy('id','desc')->get();
        return view('frontend.guestreviews.guestreviews',compact('reviews'));
        
    }

}

