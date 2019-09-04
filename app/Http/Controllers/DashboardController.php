<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; 
use App\Knowabout;
use DB;
use Carbon\Carbon;
use App\QuickReply;
// use App\BookingReply;

class DashboardController extends Controller
{
    public function index(){
    	$book = DB::table('bookings')->get();
    	$reply = DB::table('booking_replies')->get();
    	$count = 0;
    	$acc = 0;
    	$rej = 0;

    	foreach($book as $b){
    	$reply = DB::table('booking_replies')->where('booking_id',$b->id)->get();
    	foreach($reply as $r){

    		if($r->booking_id==$b->id)
    		{	if($r->bookingstatus=='0'){

    			         $rej++;


    		      }else{

    			     $acc++;

    		      }
    		}
    		else
   			{
            	// dd('here');
    			// $count++;
   			 }

   			}

    		$count++;
    		$a = $count;
    		$accepted = $acc;
    		$rejected = $rej;
    		$booking = $a-$accepted-$rejected;    	
    }
    if($count == '0'){
        $booking = $count;
        $rejected = $rej;
        $accepted = $acc;
    }

    $package = DB::table('packages')->get();
    $pack = count($package);
    $qreply = DB::table('quick_replies')->orderBy('id','desc')->get()->take(5);
    return view('cd-admin.home.home',compact('booking','rejected','accepted','pack','qreply'));
    }

    public function quickmailstore(){
    	$request = Request()->all();
    	$data = request()->validate([
    		'emailto'=>'required|email',
    		'subject'=>'required',
    		'message'=>'required'
    	]);
    	 $a = [];
        $a['created_at'] = Carbon::now();
        $final = array_merge($a,$data);
        DB::table('quick_replies')->insert($final);
        Mail::to($data['emailto'])->send(new ContactFormMail($data));
        return redirect()->back()->with('success','Message Sent Successfully');
    }
    public function qsent(){
    	$sentmsg = QuickReply::paginate(5);
    	return view('cd-admin.home.quickreply.sentmessage',compact('sentmsg'));
    }
    public function qview(QuickReply $quick){
    	return view('cd-admin.home.quickreply.sentmsgview',compact('quick'));
    }
    public function qdestroy(QuickReply $quick){
    	$quick->delete();
    	return redirect('/quickreplysent')->with('error','Message Delted Successfully');

    }
}
   





    
    

