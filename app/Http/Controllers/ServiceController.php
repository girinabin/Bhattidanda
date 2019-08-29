<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ServiceController extends Controller
{
    
    public function create(){
        return view('cd-admin.home.service.create');
    }
    public function index(){
        // $service = DB::table('services')->get();
        $service = Service::all();
        return view('cd-admin.home.service.index',compact('service'));
    }
   
    public function store(){
        $request = Request()->all();
        $data = $this->validateRequest();
        $a = [];
        $a['created_at'] = Carbon::now();
        if(isset($request['image'])){
            $file = $request['image'];
            $fileName = time().$file->getClientOriginalName();
            $destination = public_path('uploads/service');
            $file->move($destination,$fileName);
            $a['image'] = $fileName;
        }
        $final = array_merge($data,$a);
        // dd($final);
        DB::table('services')->insert($final);
    	return redirect('/services')->with('success','Data Added Successfully');
    }

    public function update(Service $service)
    {
        $request = Request()->all();
        if(isset($request['image']))
        {
            
                $a = [];
                $a['updated_at'] = Carbon::now();
                $data = $this->validateRequest();
                if(file_exists('public/uploads/service/'.$service->image))
                {
                    unlink('public/uploads/service/'.$service->image);
                }
                $file = $request['image'];
                $fileName = time().$file->getClientOriginalName();
                $destination = public_path('uploads/service');
                $file->move($destination,$fileName);
                $a['image'] = $fileName;
                $final = array_merge($data,$a);
                DB::table('services')->where('id',$service->id)->update($final);  
             
        }
        else
        {

        $a = [];
        $a['updated_at'] = Carbon::now();
        $data = $this->uvalidateRequest();
        $final = array_merge($data,$a);
        DB::table('services')->where('id',$service->id)->update($final);  

        }
       
    return redirect('/services/'.$service->id)->with('success','Data Updated Successfully');
    
}

    public function show(Service $service){
        return view('cd-admin.home.service.show',compact('service'));
    }

    public function destroy(Service $service){
        if(file_exists('public/uploads/service/'.$service->image)){
            unlink('public/uploads/service/'.$service->image);
        }
        $service->delete();
        return redirect('/services')->with('error','Data Deleted Successfully');
    }

    public function servicestatus(Service $service){
        if($service->active == 'Available'){
            $service->update([
                'active' => 0
            ]);
        }else{
            $service->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }

    private function validateRequest(){
    	return request()->validate([
            'name'=>'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',

            'altimage'=>'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
    		'summary'=>'required|regex:/^[ A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
    		'active'=>'required',
    		'image'=>'required|mimes:png,jpg,jpeg,JPG,JPEG,PNG'
    	]);
    }

    private function uvalidateRequest(){
        return request()->validate([
            'name'=>'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
            
            'altimage'=>'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
            'summary'=>'required|regex:/^[ ,.A-Za-z0-9\?\\\'\"\_~\-!@#\$%\^&\*\(\)]+$/',
            'active'=>'required',
            'image'=>'mimes:png,jpg,jpeg,JPG,JPEG,PNG'
        ]);
    }
   
}
