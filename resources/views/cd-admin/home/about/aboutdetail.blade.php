@extends('cd-admin.home-master')
@section('page-title')	
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
	
	<section class="content-header">
		<h1>
			About
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>Dashboard/About/View About/View</li>
		</ol>
	</section>

	<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
				<img src="{{url('imageuploadforabout/'.$about->image)}}" alt="" class="rounded-circle" height="25%" width="50%">
				<h2>{{$about->name}}</h2>
				<h3>{{$about->tagline}}</h3>
				</div>
				
				
				<div class="col-md-3"></div>
					
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>{!!$about->description!!}</p>
					<a href="{{asset('fileuploadforabout/'.$about->pdf)}}"><button type="button" class="btn btn-warning "><i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF FILE</button></a>
					<a href="{{$about->video}}"><button type="button" class="btn btn-warning pull-right "><i class="fa fa-female" aria-hidden="true"></i>Video</button></a>
				</div>

				
			</div>

	</section>
	
	</div>
</div>
@endsection