<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Knowabout;

class DashboardController extends Controller
{



    public function index(){
        return view('cd-admin.home.home');
    }

    

    // PACKAGE
    public function package(){
        return view('cd-admin.home.package.packageform');
    }
    public function showpackage(){
        return view('cd-admin.home.package.packageshow');
    }
     public function packagedetail(){
        return view('cd-admin.home.package.packagedetail');
    }
   
    // GALLERY

    

    // CAROUSEL

     public function carousel(){
        return view('cd-admin.home.carousel.carouselform');
    }
    public function carouselshow(){
        return view('cd-admin.home.carousel.carouselshow');
    }
     public function carouselview(){
        return view('cd-admin.home.carousel.carouselview');
    }
    // BOOKING
    
    public function bookinginbox(){
        return view('cd-admin.home.booking.bookinginbox');
    }
    public function bookingview(){
        return view('cd-admin.home.booking.bookingview');
    }

    // REVIEW
    public function review(){
        return view('cd-admin.home.review.reviewform');
    }
    public function reviewshow(){
        return view('cd-admin.home.review.reviewshow');
    }
    public function reviewdetail(){
        return view('cd-admin.home.review.reviewdetail');
    }
    // ABOUT
    public function about(){
        return view('cd-admin.home.about.aboutform');
    }
    public function aboutshow(){
        return view('cd-admin.home.about.aboutshow');
    }
    public function aboutdetail(){
        return view('cd-admin.home.about.aboutdetail');
    }

    // CONTACT
    public function contactinbox(){
        return view('cd-admin.home.contact.contactinbox');
    }
    public function contactview(){
        return view('cd-admin.home.contact.contactview');
    }
    public function contactreply(){
        return view('cd-admin.home.contact.contactreply');
    }

// SEO
    public function serviceseo(){
        return view('cd-admin.home.seo.serviceseo');
    }

      public function packageseo(){
        return view('cd-admin.home.seo.packageseo');
    }

      public function aboutseo(){
        return view('cd-admin.home.seo.aboutseo');
    }

     public function viewseo(){
        return view('cd-admin.home.seo.viewseo');
    }





    
    
}
