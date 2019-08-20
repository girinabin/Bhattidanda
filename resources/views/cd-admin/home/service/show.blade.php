@extends('cd-admin.home-master')
@section('page-title')
Service Detail
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			Service
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Services/View Services/View</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
					<img src="{{asset('public/cd-admin/creatu/dist/img/profile.jpg')}}" alt="" class="rounded-circle" height="25%" width="50%">
					<h2>{{$service->name}}</h2>
				</div>
				<div class="col-md-3"></div>
				
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>{{$service->summary}}</p>
					<button class="btn btn-info">{{$service->active}}</button>
					<form action="{{ route('services.destroy',$service->id) }}" method="POST">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-danger pull-right">Delete</button>
					</form>
 
				</div>
				
			</div>
		</section>
	</div>
</div>
@endsection