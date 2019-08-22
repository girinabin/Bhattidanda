<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image;
use DB;

class GalleryController extends Controller
{
    public function create(){
    	$album = Album::all();
        return view('cd-admin.home.gallery.create',compact('album'));
    }
    public function index(){
    	$image = Album::all();
        return view('cd-admin.home.gallery.index',compact('image'));
    }
     public function imageview(){
        return view('cd-admin.home.gallery.imageview');
    }
    public function store(){
    	$request = Request()->all();
    	$valid = $this->validateRequest();
    	$image = new Album;
    	$image['name'] = $request['name'];
    	$image['altimage'] = $request['altimage'];
    	if(isset($request['image'])){
    		$file = $request['image'];
    		$fileName = time().$file->getClientOriginalName();
    		$destinationPath = 'imageuploadforalbum';
    		$file->move($destinationPath,$fileName);
    	}
    	$image['image'] = $fileName;
    	$image->save();
    	return redirect()->back();	
    }
    public function store1(){
    	$request = Request()->all();
    	$valid = $this->validateRequest1();
        if(isset($request['images']))

         {
         	$files = $request['images'];

            foreach($files as $file)

            {

                $fileName = time().$file->getClientOriginalName();
                $destinationPath = 'imageinsidealbum';
                $file->move($destinationPath,$fileName);  
                $data[] = $fileName;  

            }

         }

         $img= new Image();

         $img->image=json_encode($data);
         $img['altimage'] = $request['altimage'];
         $img['album_id'] = $request['albumselect'];

         $img->save();

        return redirect()->back();



    }
    public function show(Album $image){
    	return view('cd-admin.home.gallery.show',compact('image'));

    }
    public function destroy(Album $image){
    	$image->delete();
    	return redirect()->back();
    }
    public function destroy1(Image $imagealbum){
    	// dd($imagealbum->image);
    	$imagealbum->delete();
    	return redirect()->back();
    }
    private function validateRequest(){
    	return Request()->validate([
    		'name' => 'required',
    		'altimage' => 'required',
    		'image' =>'required|File|image'
    	]);
    }
    private function validateRequest1(){
    	return Request()->validate([
    		'altimage' => 'required',
    		'images' => 'required',
    		'images.*' =>'image',
    		'albumselect' =>'required'
    	]);
    }
}
