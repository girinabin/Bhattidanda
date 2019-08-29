<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Package;
use App\Booking;

class PackageController extends Controller
{
  	public function packageindex()
 	{	$packages = Package::all();
        return view('cd-admin.home.package.index',compact('packages'));
   	}
    public function packageshow(Package $package){
    // {   dd($package);
        return view('cd-admin.home.package.show',compact('package'));
    }
     public function packagecreate()
     {
        return view('cd-admin.home.package.create');
    }
    public function packagestore()
    {
    	$request = Request()->all();
    	$data = $this->requestValidate();
    	$a = [];
    	$a['slug'] = str_slug($request['name']);
    	$a['created_at'] = Carbon::now();
    	if(isset($request['image']))
    	{
    		$file = $request['image'];
    		$fileName = time().$file->getClientOriginalName();
    		$destination = public_path('uploads/package');
    		$file->move($destination,$fileName);
    		$a['image'] = $fileName;
    	}
    	$final = array_merge($data,$a);
    	DB::table('packages')->insert($final);
        

       return redirect()->back();



    }

      public function packagestatus(Package $package){
        if($package->active == 'Available'){
            $package->update([
                'active' => 0
            ]);
        }else{
            $package->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }

     public function destroy(Package $package){
        if(file_exists('public/uploads/package/'.$package->image)){
            unlink('public/uploads/package/'.$package->image);
        }
        $package->delete();
        return redirect('/packages')->with('error','Data Deleted Successfully');
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
        return redirect();

    }
        


    
    public function requestValidate(){
    	$test =  request()->validate([
    		'name' => 'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
    		'altimage' => 'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
    		'description' => 'required',
    		'active' =>'required',
    		'image' => 'required|mimes:png,jpg,jpeg,JPG,JPEG,PNG',

    	]);
    	return $test;
    }
   
}
