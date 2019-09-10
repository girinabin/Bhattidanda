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
			Service Details
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Services/<a href="{{ route('services.index') }}">View Services</a>/<a href="">View</a></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
          	<div class="box box-primary">



				<div class="col-md-4">
					<img class="img-responsive" src="{{asset('public/uploads/service/'.$service->image)}}" alt="" class="rounded-circle" height="350px" width="350px" style="margin-top: 20px;">
				</div>
				<div class="col-md-5 ">
					<h2>{{e($service->name)}}</h2>
					
					<p>{{e($service->summary)}}</p>
					
				</div>
				<div class="col-md-3"></div>
				
			
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
					<div class="box-button box-footer">
						@if($service->active == 'Available')
						<div class="alert-success " style="padding: 8px; width: 70px">{{$service->active}}</div>
						@else
						
						<div class="alert-danger " style="padding: 8px; width: 85px">{{$service->active}}</div>
						@endif

					

						<a href="" data-toggle="modal" data-target="#delete{{$service->id}}"><button class="btn btn-danger pull-right " style="margin-top: -34px;">Delete</button></a>

					</div>
				</div>
					
 
				</div>
				
			</div>
		</div>
	</div>
		</section>
	</div>
</div>

<div id="delete{{$service->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete service</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete {{e($service->name)}}??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('services.destroy',$service->id) }}" method="POST">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
@endsection