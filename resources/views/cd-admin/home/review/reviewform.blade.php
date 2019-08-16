@extends('cd-admin.home-master')
@section('page-title')
Review Form
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			Review
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Review/Add Review</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Add Review</h3>
						</div>
						<form role="form">
							<div class="box-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="name">Address</label>
									<input type="text" class="form-control" id="name" placeholder="Enter Address">
								</div>
								{{-- <div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div> --}}
								{{-- <div class="form-group">
									<label for="image">Image</label>
									<input type="file" id="image">
								</div> --}}
								{{-- <div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" id="altimage" placeholder="Enter image name">
								</div> --}}
								
								<div class="form-group">
									<label for="name">Summary</label>
									<textarea name="description" class="form-control" id=""></textarea>
								</div>
								<div class="form-group">
									<label for="">Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="review"  value="" checked>Active<br>
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="review"  value="" >Inactive<br>
										</label>
									</div>
								</div>
								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="submit" class="btn btn-danger pull-right">Cancel</button>
								
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</section>
	</div>
</div>
@endsection