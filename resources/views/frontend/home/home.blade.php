@extends('frontend.home-master')
@section('title',$seo->seotitle)
@section('keyword',$seo->seokeyword)
@section('description',$seo->seodescription)
@section('content')


<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
	

	<!-- Wrapper for slides -->
	<div class="carousel-inner">


		<div class="item active">
			<div class="carousel-size">
				<img class="img-responsive" src="{{url('public/uploads/carousel/'.$hom->image)}}" alt="{{$hom->description}}">
			</div>
			<div class="text-center capitalize corpboot-wel">
				<h2>{!! $hom->description !!} </h2>
				<a href="{{ route('whyus') }}"><button type="button" class="btn btn-primary capitalize btn-slider">Know More</button></a>
			</div>
		</div>
		@foreach($homes as $key => $home)
		@if($key > 0)
		<div class="item ">
			<div class="carousel-size">
				<img class="img-responsive" src="{{url('public/uploads/carousel/'.$home->image)}}" alt="{{$home->description}}">
			</div>
			<div class="text-center capitalize corpboot-wel">
				<h2>{!! $home->description !!} </h2>
				<a href="{{route('whyus')}}"><button type="button" class="btn btn-primary capitalize btn-slider">Know More</button></a>
			</div>
		</div>
		@endif
		@endforeach





 
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>	
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- End of carousel -->


<div class="container-fluid"> 
	<div class="container">
		<div class="col-md-6"> 
			<div class="container-fluid abt-pad-2">
				<div class="col-md-5 pad-0">
					<h3 class="capitalize">Introduction</h3> 
				</div>
				<div class="col-md-7 span-brdr">
					<span></span>
				</div>
			</div>

			<div >
				<p class="text">
					{!!$intro->description!!}
				</p>
				
			</div>
		</div><!--end of col-->

		<div class="col-md-6">
			<div class="container-fluid">
				<div class="container-fluid abt-pad-2">
					<div class="col-md-4">
						<h3 class="capitalize">Book now</h3> 
					</div>
					<div class="col-md-8 span-brdr">
						<span></span>
					</div>
				</div>
				<div>
					<div class="container-fluid">
						<div id="booking">
							<div class="panel panel-default book-form">
								<div class="panel-body text-center">
									<div>
										<h3>Booking Form</h3>
									</div>

									<form class="text-center">
										<div class="book-form">
											<input type="text" class="form-control" id="user-name" name="name" placeholder="Name" >
										</div>

										<div class="book-form">
											<input type="email" class="form-control" id="user-email" name="email" placeholder="Email" >
										</div>

										

										<div class="book-form">
											<input type="number" class="form-control" name="contact" placeholder="Contact" >
										</div>

										<div class="book-form">
											<textarea name="user-message" class="form-control" id="user-message" placeholder="Message" cols="20" rows="7"></textarea>
										</div>

										<div class="book-form">
											<button type="submit" class="btn btn-warning btn-slider" ><i class="glyphicon glyphicon-log-in"></i> Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- gallery -->
<div class="container-fluid margin-all">
	<div class="container glimpse-padding">
		<div class="col-md-3">
			<h3 class="capitalize why-bhattidanda">Some of Albums</h3> 
		</div>
		<div class="col-md-9 span-brdr">
			<span></span>
		</div>
	</div>


	<div class="container">
		@foreach($albums as $album)
		<div class="col-md-3 text-center zoom-out-effect left glimpse-caption">
			<div class="thumbnail img-box galleryimg">
				<img src="{{url('public/uploads/album/'.$album->image)}}" class="img-responsive" alt="{{$album->altimage}}" style="width:100%">
			</div>
			<p>{{$album->name}}</p>
		</div>
		@endforeach

	
	</div>
</div>

<!-- greet -->
<div class="container-fluid greet margin-all">
	<div class="container-fluid">
		<div class="greet-pad">
			<p class="capitalize greet-relative">There is no hospitality <br>like understanding</p>
		</div>
	</div>
</div>


@endsection
