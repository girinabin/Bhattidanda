@extends('frontend.home-master')

@section('content')

<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Gallery</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

 <div class="container margin-bottom-all">
 	@foreach($albums as $album)
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 product_item">
 		<div class="zoom-out-effect left">
 			<div class="img-box center-block gallery-cov">
 				<a href="{{ route('album1',$album->id) }}"><img src="{{url('public/uploads/album/'.$album->image)}}" class="img-responsive" alt="{{$album->altimage}}"></a>
 			</div>
 		</div>
 		<h3 class="why-bhattidanda text-center">{{$album->name}}</h3>
 	</div>
 	@endforeach

 

 	
 </div>

@endsection