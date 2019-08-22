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
        $carousel = DB::table('carousels')->get();
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
            Session::flash('success');
            return redirect()->back();

        }
    	
    public function show(Carousel $carousel){
        return view('cd-admin.home.carousel.show',compact('carousel'));
    }
    public function destroy(Carousel $carousel){
        // dd($carousel);  
        if (file_exists('public/uploads/carousel/'.$carousel['image'])) 
        {
            unlink('public/uploads/carousel/'.$carousel['image']);
        }
        $carousel->delete();
        Session::flash('deleted');
        return redirect('/carousels');

    }
    public function status(Carousel $stat){
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
    		'image'=>'required|max:25000',
    		'image.*'=>'image',
    		'altimage'=>'required',
    		'active' => 'required'
    	]);

    }
}
