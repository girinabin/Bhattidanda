<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Seo;
class SeoController extends Controller
{
    

      public function seopages(){
        return view('cd-admin.home.seo.seopages');
    }

     public function viewseo(){
     	$seos = DB::table('seos')->orderBy('id','desc')->get();
        return view('cd-admin.home.seo.viewseo',compact('seos'));
    }
    public function validateRequest(){
    	return Request()->validate([
    		'seotitle' =>'required|max:65',
    		'seokeyword' => 'required|max:65',
    		'seodescription' => 'required|max:180',
    		'page' => 'required|unique:seos'
    	]);
    }
    public function seostore(){
    	$request = Request()->all();
    	$data = $this->validateRequest();
    	$a = [];
    	$a['created_at'] = Carbon::now();
    	$final = array_merge($data,$a);
    	DB::table('seos')->insert($final);
    	return redirect('/viewseo');
    }
    public function uvalidateRequest(){
        return Request()->validate([
            'seotitle' =>'required|max:65',
            'seokeyword' => 'required|max:65',
            'seodescription' => 'required|max:180'
            
        ]);
    }
    public function seoupdate(Seo $seo){
    	$request = Request()->all();
    	$data = $this->uvalidateRequest();
        
    	$a = [];
    	$a['updated_at'] = Carbon::now();
    	$final = array_merge($data,$a);
        
    	DB::table('seos')->where('id',$seo->id)->update($final);
    	return redirect('/viewseo')->with('success','Seo Updated Successfully');
    }
}
