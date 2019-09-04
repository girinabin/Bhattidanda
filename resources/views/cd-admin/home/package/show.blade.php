@extends('cd-admin.home-master')
@section('page-title')
Package Details
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Package Details
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i>Dashboard/Packages/<a href="{{ route('packages.index') }}">View All Packages</a>/View</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
		<div class="col-md-12">
          	<div class="box box-primary">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
					<h2>{{ e($package->name) }} </h2>
					<img src="{{asset('public/uploads/package/'.$package->image)}}" alt="" class="rounded-circle" height="350px" width="350px">
						<p>{!! $package->description !!}</p>
					
				</div>
				<div class="col-md-3"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
								
						<div class="box-button" style="padding-bottom:5px;">
						@if($package->active == 'Available')
						<button class="btn btn-success">{{($package->active)}}</button>
						@else
						<button class="btn btn-danger">{{($package->active)}}</button>
						@endif
						<a href="" data-toggle="modal" data-target="#delete{{$package->id}}"><button class="btn btn-danger pull-right  ">Delete</button></a>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
			</div>			
		</section>
	</div>
</div>

<div id="delete{{$package->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Package</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete package {{ e($package->name) }}??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('packages.destroy',$package->id) }}" method="POST">
            @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
@endsection