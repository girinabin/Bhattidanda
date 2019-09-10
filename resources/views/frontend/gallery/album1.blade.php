@extends('frontend.home-master')
@section('content')


<div class="container" style="text-align: center;">
		@foreach($images as $image)

		<div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/1.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/uploads/gallery/'.$image->image)}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 1" />
				<!-- <span><b>LightBox</b> Text to accompany first lightbox image</span> -->
			</a>

		</div>
		@endforeach

		
</div>



<!-- <div class="container margin-all margin-bottom-all">
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>

	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall1.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall2.jpg')}}" class="img-responsive">
	</div>
	<div class="col-md-3 room-pad">
				<img src="{{url('public/images/gall3.jpg')}}" class="img-responsive">
	</div>

</div>
 -->

@endsection