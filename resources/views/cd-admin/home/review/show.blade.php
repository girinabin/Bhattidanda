@extends('cd-admin.home-master')
@section('page-title')
Review Details
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			Review Details
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Review/<a href="{{ route('reviews.index') }}">Show Review</a>/Review Details</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<!-- Profile Image -->
					<div class="box box-primary">
						<div class="box-body box-profile">
							
							<h3 class="profile-username text-center">{{e($review->name)}}</h3>
							<p class="text-muted text-center">{{$review->address}}</p>
							<div class="text-center">
							<p>{{e($review->summary)}}</p>
							</div>
							@if($review->active == 'Active')
							<div class="alert-success " style="padding: 8px; width: 70px">{{$review->active}}</div>
							@else
							<div class="alert-danger " style="padding: 8px; width: 85px">{{$review->active}}</div>
							@endif


							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection