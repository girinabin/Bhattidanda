@extends('frontend.home-master')

@section('content')

<div class="container-fluid">
	<div class="container">
		@foreach($reviews as $review)
		<div class="col-md-3" style="margin-top: 20px;">
			<div class="thumbnail text-center">
				<h2>{{$review->name}}</h2>
				<h4><em style="padding-bottom: 10px;border-bottom: 1px solid #ddd;">{{$review->address}}</em></h4>
				<p style="text-align: justify;padding: 10px;">{{$review->summary}}</p>
				<div>

				</div>
			</div>
		</div>
		@endforeach
		
	</div>
</div>

@endsection