<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\DB;


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
    	$service = Service::create($this->validateRequest());
    	$this->storeImage($service);
    	return redirect('/services');
    }

    public function update(Service $service){
        $services = $service->update($this->uvalidateRequest());
        $this->storeImage($services);
        return redirect('/services/'.$service->id);
    }

    public function show(Service $service){
        return view('cd-admin.home.service.show',compact('service'));
    }
    public function destroy(Service $service){
        $service->delete();
        return redirect('/services');
    }
    private function validateRequest(){
    	return request()->validate([
    		'name'=>'required',
    		'altimage'=>'required',
    		'summary'=>'required|max:255',
    		'active'=>'required',
    		'image'=>'required'
    	]);
    }
    private function uvalidateRequest(){
        return request()->validate([
            'name'=>'required',
            'altimage'=>'required',
            'summary'=>'required',
            'active'=>'required',
            'image'=>'File|image'
        ]);
    }
    private function storeImage($service){
    	if(request()->has('image')){
    		$service->update([
    			'image'=>request()->image->store('uploadsforservices','public'),
    		]);
    	}
    }
}
