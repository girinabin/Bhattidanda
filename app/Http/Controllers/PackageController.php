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
 	{	$packages = Package::orderBy('id','desc')->get();
        return view('cd-admin.home.package.index',compact('packages'));
   	}
    public function packageshow(Package $package){
        return view('cd-admin.home.package.show',compact('package'));
    }
     public function packagecreate()
     {
        return view('cd-admin.home.package.create');
    }
    public function packagestore()
    {
        // dd($request = Request()->all());
    	$request = Request()->all();
    	$data = $this->requestValidate();
    	$a = [];
    	$a['slug'] = str_slug($request['name']);
    	$a['created_at'] = Carbon::now();
        // $a['name'] = strip_tags(htmlspecialchars_decode($request['name']));
        // $a['altimage'] = strip_tags(htmlspecialchars_decode($request['altimage']));
    	if(isset($request['image']))
    	{
    		$file = $request['image'];
    		$fileName = time().$file->getClientOriginalName();
    		$destination = public_path('uploads/package');
    		$file->move($destination,$fileName);
    		$a['image'] = $fileName;
    	}
        // dd($a);
    	$final = array_merge($data,$a);
    	DB::table('packages')->insert($final);
        

       return redirect('/packages')->with('success','Package Added Successfully');



    }
    public function packagesupdate(Package $package){
        // $request = Request()->all();
        if(isset($request['image'])){
            $a = [];
            $a['updated_at'] = Carbon::now();
            $data = $this->uvalidateRequest();
            if(file_exists('public/uploads/package/'.$package->image)){
                unlink('public/uploads/package/'.$package->image);
            }
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destination = public_path('uploads/package');
            $file->move($destination,$fileName);
            $a['image'] = $fileName;
            $final = array_merge($data,$a);
            DB::table('packages')->where('id',$package->id)->update($final);

        }
         else
        {

        $a = [];
        $a['updated_at'] = Carbon::now();
        $data = $this->uvalidateRequest();
        $final = array_merge($data,$a);
        DB::table('packages')->where('id',$package->id)->update($final);  

        }
       
    return redirect('/packages/'.$package->id.$package->slug)->with('success','Data Updated Successfully');

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
    


    
    public function requestValidate(){
    	$test =  request()->validate([
            
            
    		'name' => 'required|unique:packages',
    		'altimage' => 'required',
            'description' => 'required',
    		'active' =>'required',
    		'image' => 'required|mimes:png,jpg,jpeg,JPG,JPEG,PNG',
        

    	]);
    	return $test;
    }
    private function uvalidateRequest(){
        return request()->validate([
            'name'=>'required',
            
            'altimage'=>'required',
            'description'=>'required',
            'active'=>'required',
            'image'=>'mimes:png,jpg,jpeg,JPG,JPEG,PNG'
        ]);
    }
   
}
