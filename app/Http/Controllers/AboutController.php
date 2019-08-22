<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Knowabout;
use App\Traits\imagefileTrait;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{   
    use imagefileTrait;

     // ABOUT
    public function about(){
        return view('cd-admin.home.about.aboutform');
    }
    public function aboutshow(){
        $about = DB::table('knowabouts')->get();
       
        return view('cd-admin.home.about.aboutshow',compact('about'));
    }
    public function aboutdetail($id){
        $about = DB::table('knowabouts')->where('id',$id)->get()->first();
        return view('cd-admin.home.about.aboutdetail',compact('about'));
    }

    public function aboutstore(){
        $request = Request()->all();
        $vald = $this->validateRequest();
        // $valdu = $this->uvalidateRequest();
        $about = new Knowabout;
        $about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        $nabin = $this->getImage($request['image']);
        $about['image']= $nabin;
        $about['altimage'] = $request['altimage'];
        $about['description'] = $request['description'];
        $nabinpdf = $this->getPdf($request['pdf']);
        $about['pdf'] = $nabinpdf;
        $about['video'] = $request['video'];
        $about->save();
        return redirect('/aboutshow');
    }
    public function aboutupdate($id){    	
        $request = Request()->all();
        $vald = $this->uvalidateRequest();
        $about = Knowabout::where('id',$id)->get()->first();
    	$about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        if(request()->hasFile('image'))
        {
            $nabin = $this->getImage($request['image']);
            $about['image']= $nabin;
        };
        if(request()->hasFile('pdf')){
        $nabinpdf = $this->getPdf($request['pdf']);
        $about['pdf'] = $nabinpdf;
    };
        $about['altimage'] = $request['altimage'];
        $about['description'] = $request['description'];
        $about['video'] = $request['video'];
        $about->save();
        return redirect()->back();
    }
    public function destroy(Knowabout $about){
        if(file_exists('public/uploads/about/'.$about->image)){
            unlink('public/uploads/about/'.$about->image);
        }
        $about->delete();
        return redirect()->back();

    }
    public function validateRequest(){
        return Request()->validate([
            'name' => 'required|max:255',
            'tagline' => 'required|max:255',
            'altimage' => 'required|max:255',
            'description' => 'required',
            'video' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'pdf' => 'required|mimes:pdf',
        ]);
    }
    public function uvalidateRequest(){
        return Request()->validate([
            'name' => 'required|max:255',
            'tagline' => 'required|max:255',
            'altimage' => 'required|max:255',
            'description' => 'required',
            'video' => 'required',
            'image' => 'file|image',
            'pdf' => 'file|mimes:pdf',
        ]);  
    }

 




}
