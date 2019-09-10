<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Review;

class ReviewController extends Controller
{
    public function create(){
        return view('cd-admin.home.review.create');
    }
    public function index(){
    	// $review = DB::table('reviews')->get();
    	$review = Review::all();
        return view('cd-admin.home.review.index',compact('review'));
    }
    public function show(Review $review){
        return view('cd-admin.home.review.show',compact('review'));
    }
    public function store(){
     	$a = [];
    	$a['created_at'] = Carbon::now();
    	$data = $this->validateRequest();
    	$final = array_merge($a,$data);
    	DB::table('reviews')->insert($final);
    	return redirect('reviews');

    }
    public function update(Review $review){
    	$a = [];
    	$a['updated_at'] = Carbon::now('Asia/Kathmandu');
    	$data = $this->validateRequest();
    	$final = array_merge($data,$a);
    	DB::table('reviews')->where('id',$review->id)->update($data);
    	return redirect('reviews/'.$review->id);

    }

   

    public function rstatus(Review $rev){
    
        if($rev->active == 'Active'){
            $rev->update([
                'active' => 0
            ]);
        }else{
            $rev->update([
                'active' => 1
            ]);

        }
        return redirect()->back();
    }

     public function destroy(Review $review){
        $review->delete();
        return redirect('reviews');

    }

    public function validateRequest(){
    	$data =  Request()->validate([
    		'name' => 'required',
    		'address' =>'required',
    		'summary' => 'required',
    		'active' => 'required'
    	]);

    		return $data;
    }
}
