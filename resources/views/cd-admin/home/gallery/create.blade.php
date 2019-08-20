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
							<h3 class="box-title">Add Album </h3>
						</div>
						<form role="form" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<label for="name">Album Name</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Enter album name">
								</div>
								<div class="form-group">
									<label for="image">Album Image</label>
									<input type="file" name="image" >
								</div>
								<div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" name="altimage" class="form-control" id="altimage" placeholder="Enter album altimage name">
									</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Add Images</h3>
						</div>
						<form role="form" action="{{ route('imagealbums.store1') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<label for="albumselect">Select album</label>	
									<select name="albumselect" id="albumselect" class="form-control">
										<option value="	"disabled>Select Album</option>
										@foreach($album as $albums)
										<option value="{{$albums->id}}">{{$albums->name}}</option>
										@endforeach

									</select>	
								</div>
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" name="images[]" multiple id="image">
								</div>
								<div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" name="altimage" id="altimage" placeholder="Enter altimage name">
									</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add</button>
									
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
		@endsection