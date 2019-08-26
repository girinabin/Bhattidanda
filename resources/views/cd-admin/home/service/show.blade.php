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
					<img src="{{asset('public/uploads/service/'.$service->image)}}" alt="" class="rounded-circle" height="25%" width="50%">
					<h2><noscript>{{e($service->name)}}</noscript></h2>
				</div>
				<div class="col-md-3"></div>
				
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>{!!$service->summary!!}</p>
					<div class="box-button">
						<button class="btn btn-info">{{($service->active)}}</button>
					<form action="{{route('services.destroy',$service->id) }}" method="POST">
						@method('DELETE')
						@csrf

						<a href="" data-toggle="modal" data-target="#delete{{$service->id}}"><button class="btn btn-danger pull-right button-edit " style="margin-top: 3px;">Delete</button></a>
					</form>
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
          <h4 class="modal-title">Delete services</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('services.destroy',$service->id) }}" method="POST">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection