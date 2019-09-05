<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingFormMail; 
use App\Mail\BookingAcceptedFormMail; 
use App\Mail\BookingRejectedFormMail; 


use App\Package;
use App\Booking;
use Carbon\Carbon;
use DB;
use App\BookingReply;
use App\BookingStatus;

class BookingController extends Controller
{
     public function bookingcreate($slug)
    {
        $packages = Package::where('slug',$slug)->get()->first();
        return view('cd-admin.home.bookings.create',compact('packages'));
    }
    public function bookinginbox(){
    	$bookings = Booking::orderBy('id','desc')->paginate(10);
    	return view('cd-admin.home.bookings.bookinginbox',compact('bookings'));
    }
    public function bookinginboxshow(Booking $booking){
         // $status = BookingStatus::all();


    	return view('cd-admin.home.bookings.bookingview',compact('booking'));

    }
    

        
    public function packagebook(){
        $request = Request()->all();
        $book = new Booking();
        $book['name'] = $request['name'];
        $book['email'] = $request['email'];
        $book['age'] = $request['age'];
        $book['location'] = $request['location'];
        $book['contact'] = $request['contact'];
        $book['message'] = $request['message'];
        $book['slug'] = $request['slug'];
        $book->save();
        return redirect()->back();

    }
    public function binboxdestroy(Booking $booking){
        
        $booking->delete();
        return redirect('bookings/inbox')->with('error','Message Deleted Successfully!!');
    }

    public function breplycreate(Booking $booking)
    {  
    	return view('cd-admin.home.bookings.bookingreply',compact('booking'));
    }

    public function mailreply($id)
     { 

        $data = request()->validate([
            'emailto' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'replystatus' => 'required',
        ]);
        $a = [];
        $a['created_at'] = Carbon::now();
        $a['booking_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('booking_replies')->insert($final);
        Mail::to($data['emailto'])->send(new BookingFormMail($data));
        return redirect('bookings/inbox')->with('success','Message replied successfully!!');

        

    }
    public function statusreply($id){
        $data = request()->validate([
            'emailto' => 'required|email',
            'bstatus' => 'required',
            'replystatus' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now();
        $a['booking_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('booking_statuses')->insert($final);

        if($data['bstatus']=='1'){
            Mail::to($data['emailto'])->send(new BookingAcceptedFormMail($data));
            return redirect()->back()->with('success','Message replied successfully');
        }else{
             Mail::to($data['emailto'])->send(new BookingRejectedFormMail($data));
            return redirect()->back()->with('success','Message replied successfully');

        }
    }

    public function breplyinbox(){
    	$bookings = BookingReply::orderBy('id','desc')->paginate(10);
    	return view('cd-admin.home.bookings.sentmsgbooking',compact('bookings'));
    }

    public function breplydestroy(BookingReply $booking)
    {
        
        $booking->delete();
        return redirect('breplyinbox/')->with('error','Message Deleted Successfully!!');
    }
      
    public function breplyview(BookingReply $booking){
    	return view('cd-admin.home.bookings.sentmsgbookingview',compact('booking'));
    }   
}
