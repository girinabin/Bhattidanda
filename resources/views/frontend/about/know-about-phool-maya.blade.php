@extends('frontend.home-master')

@section('content')

<div class="container-fluid mayaimage packageimg">
	<img src="{{url('public/uploads/about/'.$about->image)}}" class="img-responsive " alt="Phool Maya">
</div>

<div class="container text-center maya-pad">
	
		<div class="container-fluid maya-pad-2">
		<h1 class="capitalize why-bhattidanda"><strong>{{$about->name}}</strong></h1>
		
		<div class="col-md-4 span-brdr-1">
			<span></span>
		</div>
		<div class="col-md-4">
			<p class="capitalize">{{$about->tagline}}</p>
		</div>
		<div class="col-md-4 span-brdr-1">
			<span></span>
		</div>
		</div>
	<div>
		<p class="text">{{$about->description}}</p>
		{{-- <p class="text"><strong>Phool Maya Tamang</strong> Tamang belongs to a village in Nepal where girls are uneducated, restricted to household chores and allowed to work only in the fields. They have no avenues to achieve something big in their lives. Having faced sorrows and wanting a better life for her daughter and other women, <strong>Phool Maya</strong> decided to bring change in the village.</p>

		<p class="text">Despite facing numerous obstacles, she started a cooperative with 20 women. They collected money through agriculture and invested in an informal savings account. The loans from the cooperative have been used for buffalo husbandry, agriculture, and education. <strong>Phool Maya</strong> kept a very interesting condition about payback of the loan-a portion of the money earned would be used teach a girl in the family.</p>

		<p class="text">This cooperative is up and running till date. The initial saving of 50 Rupees has reached 22 Lakhs, involving 300 people. <strong>Phool Maya</strong> has also participated in many community projects, helped set up about 100 houses during the earthquake, and started Bhattidanda Homestay.</p>

		<p class="text">Bhattidanda Homestay was initiated on April 28, 2011. It directly purchases fruits, vegetables and dairy products from the farmers. <strong>Phool Maya</strong> has helped improve the lives of many people through this venture and made them self-sufficient, educated and financially stable.</p>

		<p class="text">She was awarded with Surya Asha Nepal Social Entrepreneurship Award in the year 2013 for her dedication and hard work towards the community of Bhattidanda. Yet, this is not the end for her. She wants to contribute more and she believes that there is still a long way to go.</p> --}}
	</div>
</div>

<div class="container maya-pad">
	<div class="col-md-6 text-center">
		<a href="{{url('public/uploads/about/'.$about->pdf)}}" target="_blank"><button type="button" class="btn btn-warning btn-maya"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF FILE</button></a>
	</div>

	<div class="col-md-6 text-center">
		<a href="{{$about->video}}" target="_blank"><button type="button" class="btn btn-warning btn-maya"><i class="fa fa-female" aria-hidden="true"></i>KNOW ABOUT PHOOL MAYA</button></a>
	</div>
</div>

@endsection