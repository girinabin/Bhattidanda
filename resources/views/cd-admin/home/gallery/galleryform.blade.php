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
						<form role="form">
							<div class="box-body">
								<div class="form-group">
									<label for="name">Album Name</label>
									<input type="text" class="form-control" id="albumname" placeholder="Enter album name">
								</div>
								<div class="form-group">
									<label for="image">Album Image</label>
									<input type="file" id="albumimage">
								</div>
								<div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" id="altimage" placeholder="Enter image name">
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
						<form role="form">
							<div class="box-body">
								<label for="">Select Album</label>
								<select name="" id="">
									<option value="">Restaurant</option>
									<option value="">Farm</option>
									<option value="">Rooms</option>
									<option value="">Bhattidanda</option>
								</select>
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" id="image">
								</div>
								<div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" id="altimage" placeholder="Enter image name">
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