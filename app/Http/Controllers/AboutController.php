<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Knowabout;
use App\Traits\imagefileTrait;

class AboutController extends Controller
{   
    use imagefileTrait;

     // ABOUT
    public function about(){
        return view('cd-admin.home.about.aboutform');
    }
    public function aboutshow(){
    	$about = Knowabout::all();
        return view('cd-admin.home.about.aboutshow',compact('about'));
    }
    public function aboutdetail(){
        return view('cd-admin.home.about.aboutdetail');
    }

    public function aboutstore(){
        $request = Request()->all();
        // dd($request);
        Request()->validate([
            'name' => 'required|max:255',
            'tagline' => 'required|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'altimage' => 'required|max:255',
            'description' => 'required',
            'pdf' => 'required|mimes:pdf',
            'video' => 'required'

        ]);
        
       
        
        // $about['image'] = $request['image'];
        $about = new Knowabout;
        $about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        //  if(isset($request['image'])){
        //     $file = $request['image'];
        //     $fileName = time().$file->getClientOriginalName();
        //     $destinationPath = 'imageuploadforabout';
        //     $file->move($destinationPath,$fileName);
        //     $file->save = $fileName;
        // }
        // dd($this->  getImage());
        $nabin = $this->getImage();
        dd($nabin);
        // $about['image'] = $this->getImage();
        $about['altimage'] = $request['altimage'];
        $about['description'] = $request['description'];
        if(isset($request['pdf'])){
            $file = $request['pdf'];
            $fileName1 = time().$file->getClientOriginalName();
            $destinationPath = 'fileuploadforabout';
            $file->move($destinationPath,$fileName1);
            $file->save = $fileName1;
        }
        $about['pdf'] = $fileName1;
        $about['video'] = $request['video'];
        // dd($about);
        $about->save();
        return redirect('/aboutshow');


    }

    public function aboutupdate($id){    	
        $request = Request()->all();
        $about = Knowabout::where('id',$id)->get()->first();
    	$about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        if(isset($request['image'])){
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destinationPath = 'imageuploadforabout';
            $file->move($destinationPath,$fileName);
            $file->save = $fileName;
        }
        // $about['image']=$this->getImage();
        // dd($about);
        

        $about['image'] = $fileName;
        $about['altimage'] = $request['altimage'];
        $about['description'] = $request['description'];
        if(isset($request['pdf'])){
            $file = $request['pdf'];
            $fileName1 = time().$file->getClientOriginalName();
            $destinationPath = 'fileuploadforabout';
            $file->move($destinationPath,$fileName1);
            $file->save = fileName1;
        }
        // $about['pdf'] = $fileName1;
        $about['video'] = $request['video'];
        $about->save();
        return redirect()->back();
    }

    public function getImage(){
         if(isset($request['image'])){
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destinationPath = 'imageuploadforabout';
            $file->move($destinationPath,$fileName);
            $file->save = $fileName;
            return $fileName;
        }

    }


//     public function getImage()
//     {
//     	$finalRequest =[];
//     	$request = Request()->all();
//     	$image =Input::file('image')->OriginalPath();
// dd($image);
    	
//     		$file = Input::file('image');
//             $fileName = time().$file->getClientOriginalName();
//             $destinationPath = 'imageuploadforabout';
//             $file->move($destinationPath,$fileName);
//             return $fileName;
    	
    
//     }




}
