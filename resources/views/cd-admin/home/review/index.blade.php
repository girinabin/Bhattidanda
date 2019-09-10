@extends('cd-admin.home-master')
@section('page-title')
ShowReview
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Show Reviews
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Review/Show Review</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<section class="content">
					<div class="row">
						<!-- left column -->
						<div class="col-md-12">
							<!-- general form elements -->
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title"></h3>
									<a href="{{ route('reviews.create') }}"><button class="btn btn-primary">Add Review</button></a>
									<div >
										<div class="box-header">
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>Name</th>
														<th>Address</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($review as $reviews)
													<tr>
														<td>{{e(str_limit($reviews->name,$limits='30'))}}</td>
														<td>{{e(str_limit($reviews->address,$limits='30'))}}</td>
														<td>
							<div class="btn-group">
                           @if($reviews->active=='Active')
                          <button type="button" class="btn btn-success bsize">{{$reviews->active}}</button>
                          @else
                          <button type="button" class="btn btn-danger bsize">{{$reviews->active}}</button>
                          @endif

                          <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span> 
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu" style="min-width: 0px;">
                          <form action="{{ route('rev.stat',$reviews->id) }}" method="POST">
                          	@csrf
                          	@method('PATCH')
                              
                      
                            <button type="submit" class="btn btn-secondary">{{$reviews->active =='Active' ? 'Inactive' : 'Active'}}</button>
                           </form>
                      
                          </ul>
                        </div>
														</td>
														<td>
															<div class="btn-group">
																<button type="button" class="btn btn-primary">Action</button>
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
																<span class="caret"></span>
																<span class="sr-only">Toggle Dropdown</span>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li><a href=""  data-toggle="modal" data-target="#myModal{{$reviews->id}}">
																	<i class="fa fa-edit"></i> Edit</a></li>
																	{{-- edit modal below
																	--}}
																	<li><a href="{{route('reviews.show',$reviews->id)}}"><i class="fa fa-eye"></i>View</a></li>
																	<li><a href="" data-toggle="modal" data-target="#delete{{$reviews->id}}"><i class="fa fa-trash"></i>Delete</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
												@endforeach
												<tfoot>
												<tr>
													<th>Name</th>
													<th>Address</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
												</tfoot>
											</table>
										</div>
										<!-- /.box-body -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</div>
</div>
<!-- edit model -->
@foreach($review as $reviews)
<div id="myModal{{$reviews->id}}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Review</h4>
			</div>
			<div class="modal-body">
				<div class="box box-primary">
					<form role="form" action="{{ route('reviews.update',$reviews->id) }}" method="Post">
						@csrf
						@method('PATCH')
						<div class="box-body">
							<div class="form-group">
								<div class="text text-danger">{{$errors->first('name')}}</div>
								<label for="name">Name</label>
								<input type="text" class="form-control" value="{{$reviews->name}}" id="name" name="name" placeholder="Enter Name">
							</div>
							<div class="form-group">
								<div class="text text-danger">{{$errors->first('address')}}</div>

								<label for="address">Address</label>
								<input type="text" class="form-control" value="{{$reviews->address}}" id="address" name="address" placeholder="Enter Address">
							</div>
							
							<div class="form-group">
								<div class="text text-danger">{{$errors->first('summary')}}</div>

								<label for="summary">Summary</label>
								<textarea name="summary" class="form-control" id="summary">{{$reviews->summary}}</textarea>
							</div>
							<div class="form-group">
								<div class="text text-danger">{{$errors->first('active')}}</div>

								<label for="active">Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="active"  value="1" {{$reviews->active == 'Active' ? 'checked' : ''}}>Active<br>
										<input type="radio" name="active"  value="0" {{$reviews->active == 'Inactive' ? 'checked' : ''}} >Inactive<br>
									</label>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
{{-- delete modal --}}
<div id="delete{{$reviews->id}}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Delete Review</h4>
			</div>
			<div class="modal-body">
				<h2> <p>Are you sure??</p> </h2>
			</div>
			<div class="modal-footer">
				<form action="{{ route('reviews.destroy',$reviews->id) }}" method="POST">
					@csrf
					@method('DELETE')
				<button type="submit" class="btn btn-danger pull-left">Delete</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection