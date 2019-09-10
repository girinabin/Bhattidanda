<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\User;

class AdminController extends Controller
{
    public function adminadd(){
    	return view('cd-admin.home.admin.create');
    }
    public function adminstore(){
    	$request = Request()->all();
    	$data = $this->requestValidate();
    	$a=[];
    	$a['created_at'] = Carbon::now();
    	$a['password'] = bcrypt($data['password']);
    	$final = array_merge($data,$a);
    	DB::table('users')->insert($final);

    	return redirect()->back()->with('success','Admin Added Successfully');
    
    }
    public function adminindex(){
    	$admins = User::all();
    	return view('cd-admin.home.admin.index',compact('admins'));
    }
    public function admindestroy(User $admin){
        $admin->delete();
        return redirect('adminindex/')->with('error','Admin Deleted Successfully');
    }
    public function requestValidate(){
    	return request()->validate([
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed|min:6',
    		'role' => 'required'


    	]);
    }
}
