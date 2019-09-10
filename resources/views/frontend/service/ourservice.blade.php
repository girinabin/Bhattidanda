@extends('frontend.home-master')

@section('content')
<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Our Services</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

<div class="container-fluid margin-bottom-all">
	<div class="container">
		@foreach($services as $service)
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="thumbnail text-center thumbnail-height">
				<img src="{{url('public/uploads/service/'.$service->image)}}" class="img-responsive" alt="{{$service->altimage}}" style="width:100%">
				<h2>{{$service->name}}</h2>
				<p>{{$service->summary}}</p>
			</div>
		</div>
		@endforeach
		
	</div>
</div>

@endsection