@extends('frontend.home-master')

@section('content')

<div class="container-fluid mayaimage packageimg">
	<img src="{{url('public/images/bhattidandaimages/packages.png')}}" class="img-responsive " alt="Phool Maya">
</div>

<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Our Package</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

<div class="container-fluid package-down">
	@foreach($packages as $package)
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center package-down-1">
		<div class="thumbnail thumbnail-width">
			<img src="{{url('public/uploads/package/'.$package->image)}}" class="img-responsive" alt="{{$package->altimage}}" style="width:100%">
			<h3 class="text-center">{{$package->name}}</h3>
			<hr>
			<ul class="room-ul">
				<li>{!!strip_tags($package->description,'<p>')!!}</li>
				
			</ul>

			
		</div>
		<a href="{{ route('booking',$package->slug) }}"><button type="button" class="btn btn-warning btn-maya">Book</button></a>
	</div>
	@endforeach
	 
</div>

@endsection