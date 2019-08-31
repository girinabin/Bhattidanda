<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; 

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Contact;
use App\ReplyContact;

class ContactController extends Controller
{
    public function create()
    {
    	return view('cd-admin.home.contact.create');
    }

    public function contactinbox()
    {   
        $contacts = Contact::orderBy('id','desc')->get();
        $replys = ReplyContact::all();
        return view('cd-admin.home.contact.contactinbox',compact('contacts','replys'));
    }
    public function contactsentitem(){
        $sentmsg = ReplyContact::orderBy('id','desc')->get();

        return view('cd-admin.home.contact.sentmessage',compact('sentmsg'));
    }

    public function contactview(Contact $contact)
    {  
        return view('cd-admin.home.contact.contactview',compact('contact'));
    }

    public function sentmsgview(ReplyContact $message)
    {  
        return view('cd-admin.home.contact.sentmsgview',compact('message'));
    }

    public function contactreply(Contact $contact)
    {
        return view('cd-admin.home.contact.contactreply',compact('contact'));
    }
    

    public function store()
    {
    	$data = request()->validate([
    		'email' => 'required|email',
    		'name' => 'required',
    		'message' => 'required'
    	]);
        $a = [];
        $a['created_at'] = Carbon::now();
        $final = array_merge($a,$data);
        DB::table('contacts')->insert($final);
        return redirect()->back();

        
    	

    }
    public function destroy(Contact $contact){
        $contact->delete();
        return redirect('contactinbox')->with('error','Message Deleted Successfully!!');
    }

    public function sentdestroy(ReplyContact $message){
        $message->delete();
        return redirect('messagesent')->with('error','Message Deleted Successfully!!');
    }


     public function mailreply($id)
     { 

        $data = request()->validate([
            'emailto' => 'required|email|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
            'subject' => 'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
            'message' => 'required',
            'active' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now();
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('reply_contacts')->insert($final);
        Mail::to($data['emailto'])->send(new ContactFormMail($data));
        return redirect('contactinbox')->with('success','Message replied successfully!!');

        

    }
}
