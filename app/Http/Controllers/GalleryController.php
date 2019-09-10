<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image;
use DB;

class GalleryController extends Controller
{
    public function create(){
    	// $album = Album::all();
        return view('cd-admin.home.gallery.create');
    }

    public function gallerycreate($id = null){


        $album = Album::where('id',$id)->get()->first();
        return view('cd-admin.home.gallery.imagecreate',compact('album'));
    }

    public function index(){
    	$albums = Album::orderBy('id','desc')->paginate(6);
        return view('cd-admin.home.gallery.index',compact('albums'));
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
    		$destinationPath = public_path('uploads/album');
    		$file->move($destinationPath,$fileName);
    	}
    	$image['image'] = $fileName;
        $image['seotitle'] = $request['seotitle'];
        $image['seokeyword'] = $request['seokeyword'];
        $image['seodescription'] = $request['seodescription'];
        $image['active'] = $request['active'];

    	$image->save();
    	return redirect('images')->with('success','Album Added Successfully');	
    }
    public function store1(){
    	$request = Request()->all();
    	$valid = $this->validateRequest1();
        if(isset($request['image']))
         {
         	$file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destinationPath = public_path('uploads/gallery');
            $file->move($destinationPath,$fileName);     
         }

         $img= new Image();
         $img->image = $fileName;
         $img['altimage'] = $request['altimage'];
         $img['album_id'] = $request['albumselect'];
        $img['active'] = $request['active'];

         $img->save();

        return redirect('images/'.$img->album_id)->with('success','Image Added Successfully');



    }
    public function show(Album $image){
        $imgs = Image::where('album_id',$image->id)->orderBy('id','desc')->paginate(6);
    	return view('cd-admin.home.gallery.show',compact('image','imgs'));

    }
    public function destroy(Album $image){
        if(file_exists('public/uploads/album/'.$image->image)){
            unlink('public/uploads/album/'.$image->image);
            $test = Image::all()->where('album_id',$image->id)->all();
            foreach ($test as $t)
            {  
            if(file_exists('public/uploads/gallery/'.$t->image)){
                unlink('public/uploads/gallery/'.$t->image);
            }    
            $t->delete();

            }
            
        }

    	$image->delete();
    	return redirect('images')->with('error','Album Deleted Successfully');
    }
    public function destroy1(Image $imagealbum){
        if(file_exists('public/uploads/gallery/'.$imagealbum->image)){
            unlink('public/uploads/gallery/'.$imagealbum->image);
        }
    	$imagealbum->delete();
    	return redirect()->back()->with('error','Image Deleted Successfully');
    }

    public function albumstatus(Album $alb){
        if($alb->active == 'Active'){
            $alb->update([
                'active' => 0
            ]);
        }else{
            $alb->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }

    public function imagestatus(Image $img){
        if($img->active == 'Active'){
            $img->update([
                'active' => 0
            ]);
        }else{
            $img->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }

    private function validateRequest(){
    	return Request()->validate([
    		'name' => 'required|unique:albums',
    		'altimage' => 'required',
    		'image' =>'required|mimes:png,jpg,jpeg,JPG,JPEG,PNG',
            'seotitle' =>'required|max:65',
            'seokeyword' => 'required|max:65',
            'seodescription' => 'required|max:180',
            'active' => 'required'

    	]);
    }
    private function validateRequest1(){
    	return Request()->validate([
    		'altimage' => 'required',
    		'image' => 'required|mimes:png,jpg,jpeg,JPG,JPEG,PNG',
    		'albumselect' =>'required',
            'active' => 'required'
    	]);
    }
}
