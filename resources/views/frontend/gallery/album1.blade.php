@extends('frontend.home-master')

@foreach($images as $image)
<?php $test = App\Album::where('id',$image['album_id'])->get()->first();
?>

@section('title',$test->seotitle)
@section('keyword',$test->seokeyword)
@section('description',$test->seodescription)
@endforeach

@section('content')


<div class="container" style="text-align: center;">
		@foreach($images as $image)

		<div class="room-inline room-pad">
			<a href="{{url('public/images/gallery/restaurant/1.jpg')}}" class="flipLightBox ">
				<img src="{{url('public/uploads/gallery/'.$image->image)}}" class="room-img img-responsive" width="300" height="300" alt="flipLightBox Image 1" />
				
			</a>

		</div>
		@endforeach

		
</div>




@endsection