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
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
					<img src="{{asset('public/uploads/service/'.$service->image)}}" alt="" class="rounded-circle" height="350px" width="350px">
					<h2>{{e($service->name)}}</h2>
				</div>
				<div class="col-md-3"></div>
				
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>{{e($service->summary)}}</p>
					<div class="box-button">
						@if($service->active == 'Available')
						<button class="btn btn-success">{{($service->active)}}</button>
						@else
						<button class="btn btn-danger">{{($service->active)}}</button>
						@endif

					

						<a href="" data-toggle="modal" data-target="#delete{{$service->id}}"><button class="btn btn-danger pull-right button-edit " style="margin-top: 3px;">Delete</button></a>

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