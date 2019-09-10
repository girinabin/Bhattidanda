<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Knowabout;
use App\Traits\imagefileTrait;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutController extends Controller
{   
    use imagefileTrait;

     // ABOUT
    public function about(){
        return view('cd-admin.home.about.aboutform');
    }
    public function aboutshow(){
        $about = DB::table('knowabouts')->orderBy('id','desc')->get();
       
        return view('cd-admin.home.about.aboutshow',compact('about'));
    }
    // public function aboutdetail($id){
    //     $about = DB::table('knowabouts')->where('id',$id)->get()->first();
    //     return view('cd-admin.home.about.aboutdetail',compact('about'));
    // }
    public function aboutdetail(){
        $about = DB::table('knowabouts')->get()->first();
        return view('cd-admin.home.about.aboutdetail',compact('about'));
    }

    public function aboutstore(){
        $request = Request()->all();
        $vald = $this->validateRequest();
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
        return redirect('/aboutshow')->with('success','Data Added Succesfully!');
    }
    // public function aboutupdate(){    	
    //     $request = Request()->all();
    //     $vald = $this->uvalidateRequest();
    //     $about = DB::table('knowabouts')->get()->first();
    // 	$about->name = $request['name'];
    //     $about->tagline = $request['tagline'];
    //     if(request()->hasFile('image'))
    //     {
    //         $nabin = $this->getImage($request['image']);
    //         $about['image']= $nabin;
    //     };
    //     if(request()->hasFile('pdf')){
    //     $nabinpdf = $this->getPdf($request['pdf']);
    //     $about['pdf'] = $nabinpdf;
    // };
    //     $about->altimage = $request['altimage'];
    //     $about->description = $request['description'];
    //     $about->video = $request['video'];
    //     // $about->save();
    //     DB::table('knowabouts')->update([);
    //     return redirect('aboutdetail/'.$about->id)->with('success','Data Updated Succesfully!');
    // }
    public function aboutupdate(){
        $request = Request()->all();
        $about = Knowabout::first();
        if(isset($request['image'])){
        
            $a = [];
            $a['updated_at'] = Carbon::now();
            $data = $this->uvalidateRequest();
            if(file_exists('public/uploads/about/'.$about->image)){
                unlink('public/uploads/about/'.$about->image);
            }
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destination = public_path('uploads/about');
            $file->move($destination,$fileName);
            $a['image'] = $fileName;

            

            $final = array_merge($data,$a);
            DB::table('knowabouts')->update($final);

        }
         elseif(isset($request['pdf'])){
            $a = [];
            $a['updated_at'] = Carbon::now();
            $data = $this->uvalidateRequest();
       
            if(file_exists('public/uploads/about/'.$about->pdf)){
                unlink('public/uploads/about/'.$about->pdf);
            }

            $files = $request['pdf'];
            $fileNames = time().$files->getClientOriginalName();
            $destination = public_path('uploads/about');
            $files->move($destination,$fileNames);
            $a['pdf'] = $fileNames;
            
            
        $final = array_merge($data,$a);
        DB::table('knowabouts')->update($final); 

         }
        else{

        $a = [];
        $a['updated_at'] = Carbon::now();
        $data = $this->uvalidateRequest();            
        $final = array_merge($data,$a);
        DB::table('knowabouts')->update($final);  

        }
        return redirect('aboutdetail/')->with('success','Data Updated Succesfully!');
    }

    public function destroy(Knowabout $about){
        if(file_exists('public/uploads/about/'.$about->image)){
            unlink('public/uploads/about/'.$about->image);
            if(file_exists('public/uploads/about/'.$about->pdf)){
            unlink('public/uploads/about/'.$about->pdf);
        }
        }
        

        $about->delete();
        return redirect('aboutshow')->with('error','Data Deleted Succesfully');

    }
    public function validateRequest(){
        return Request()->validate([
            'name' => 'required',
            'tagline' => 'required',
            'altimage' => 'required',
            'description' => 'required',
            'video' => 'required|url',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'pdf' => 'required|mimes:pdf',
        ]);
    }
    public function uvalidateRequest(){
        return Request()->validate([
            'name' => 'required',
            'tagline' => 'required',
            'altimage' => 'required',
            'description' => 'required',
            'video' => 'required|url',
            'image' => 'mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'pdf' => 'mimes:pdf',
        ]);  
    }

 




}
