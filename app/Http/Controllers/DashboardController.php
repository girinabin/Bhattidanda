<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; 
use App\Knowabout;
use DB;
use Carbon\Carbon;
use App\QuickReply;
use Auth;
use App\Introduction;
// use App\BookingReply;

class DashboardController extends Controller
{  
    public function logout(){

        Auth::logout();
        return redirect()->back()->with('success','Logout Successfull');
    }

    public function index(){
    	$book = DB::table('bookings')->get();
    	$reply = DB::table('booking_statuses')->get();
    	$count = 0;
    	$acc = 0;
    	$rej = 0;

    	foreach($book as $b){
    	$reply = DB::table('booking_statuses')->where('booking_id',$b->id)->get();
    	foreach($reply as $r){

    		if($r->booking_id==$b->id)
    		{	if($r->bstatus=='0'){

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

    public function introcreate(){
        return view('cd-admin.home.introduction.introform');
    }

    public function introstore(){
        // $request = Request()->all();
        $data = request()->validate([
            'description' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now();
        $final = array_merge($data,$a);
        DB::table('introductions')->insert($final);
        return redirect()->back();
        
    }
    public function introview(){
        $intro = Introduction::first();
        return view('cd-admin.home.introduction.introview',compact('intro'));
    }

    public function introupdate(){
        // $into = Introduction::first();
        $data = request()->validate([
            'description' => 'required'
        ]);
        $a = [];
        $a['updated_at'] = Carbon::now();
        $final = array_merge($data,$a);
        DB::table('introductions')->update($final);
        return redirect('introview')->with('success','Introduction Updated');

    }
}
   





    
    

