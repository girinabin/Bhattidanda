@extends('cd-admin.home-master')
@section('page-title')
Gallery Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Gallery
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Add New Gallery</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<a href="{{ route('gallery.create') }}"><button class="btn btn-primary pull-right">Add Image</button></a>
							<h3 class="box-title">Add Album </h3>
						</div>
						<form role="form" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('name')}}</div>
									<label for="name">Album Name</label>
									<input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Enter album name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('image')}}</div>
									<label for="image">Album Image</label>
									<input type="file" name="image" >
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('altimage')}}</div>
										<label for="altimage">Alt Image</label>
										<input type="text" name="altimage" value="{{old('altimage')}}" class="form-control" id="altimage" placeholder="Enter album altimage name">
									</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add Album</button>
								</div>
							</div>	
						</form>
						<div class="box-footer">
							<a href="{{ URL()->previous() }}"><button class="btn btn-danger pull-right">Cancel</button></a>
						</div>
					</div>
				</div>
			</div>
				
		</section>
	</div>
	</div>
@endsection