@extends('frontend.home-master')
@section('title',$seo->seotitle)
@section('keyword',$seo->seokeyword)
@section('description',$seo->seodescription)


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