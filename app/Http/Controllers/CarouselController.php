<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use DB;
use Session;
use Carbon\Carbon;
class CarouselController extends Controller
{
    public function create(){
        return view('cd-admin.home.carousel.create');
    }
    public function index(){
        $carousel = DB::table('carousels')->orderBy('id','desc')->paginate(6);
        return view('cd-admin.home.carousel.index',compact('carousel'));
    }
     
    public function store(){
        $request = Request()->all();
        $a = [];
        $a['updated_at']=Carbon::now();
        $data = $this->validateRequest();
        if(isset($request['image'])){
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destinationPath = public_path('uploads/carousel');
            $file->move($destinationPath,$fileName);
        }
            $a['image'] = $fileName;
            $final = array_merge($data,$a);
            DB::table('carousels')->Insert($final);
            // Session::flash('success');
            return redirect('/carousels')->with('success','Data Added Successfully!');

        }
    	
    public function show(Carousel $carousel){
        return view('cd-admin.home.carousel.show',compact('carousel'));
    }
    public function destroy(Carousel $carousel){
        if (file_exists('public/uploads/carousel/'.$carousel['image'])) 
        {
            unlink('public/uploads/carousel/'.$carousel['image']);
        }
        $carousel->delete();
        // Session::flash('deleted');
        return redirect('/carousels')->with('error','Data Deleted Successfully!');

    }
    public function cstatus(Carousel $stat){
        if($stat->active == 'Active'){
            $stat->update([
                'active' => 0
            ]);
        }else{
            $stat->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }
    

    private function validateRequest(){
    	 return Request()->validate([
    		'description'=>'required',
    		'image'=>'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG',
            'altimage' => 'required',
    		'active' => 'required'
    	]);

    }
}
